from django.shortcuts import render, redirect, get_object_or_404
from productPage.models import Product
from .models import CartItem

def add_to_cart(request, product_id):
    product = get_object_or_404(Product, id=product_id)

    if request.user.is_authenticated:
        # Logged-in user: Save in DB
        cart_item, created = CartItem.objects.get_or_create(user=request.user, product=product)
        if not created:
            cart_item.quantity += 1
        cart_item.save()
    else:
        # Guest user: Save in session
        cart = request.session.get('cart', {})
        if str(product_id) in cart:
            cart[str(product_id)] += 1
        else:
            cart[str(product_id)] = 1
        request.session['cart'] = cart

    return redirect('cart')

def cart(request):
    cart_items = []
    total = 0

    if request.user.is_authenticated:
        # Logged-in: standardize format to match guest structure
        db_cart_items = CartItem.objects.filter(user=request.user)
        for item in db_cart_items:
            cart_items.append({
                'product': item.product,
                'quantity': item.quantity,
                'total_price': item.get_total_price(),
                'id': item.id
            })
            total += item.get_total_price()
    else:
        # Session-based for guests
        cart = request.session.get('cart', {})
        for product_id, quantity in cart.items():
            product = Product.objects.get(id=product_id)
            total_price = float(product.product_Price) * quantity
            cart_items.append({
                'product': product,
                'quantity': quantity,
                'total_price': total_price
            })
            total += total_price

    context = {
        'cart_items': cart_items,
        'total': total
    }
    return render(request, 'Cart.html', context)


def confirmation(request):
    if request.method == 'POST':
        name = request.POST.get('name')
        number = request.POST.get('number')
        email = request.POST.get('email')
        address = request.POST.get('address')

        if request.user.is_authenticated:
            # Clear the DB cart items for the logged-in user
            CartItem.objects.filter(user=request.user).delete()
        else:
            # Clear session cart for guests
            request.session['cart'] = {}

        context = {
            'name': name or (request.user.username if request.user.is_authenticated else ''),
            'number': number,
            'email': email or (request.user.email if request.user.is_authenticated else ''),
            'address': address,
        }
        return render(request, 'Confirmation.html', context)

    return render(request, 'Confirmation.html')

# Remove from cart
def remove_from_cart(request, product_id):
    if request.method == 'POST':
        if request.user.is_authenticated:
            CartItem.objects.filter(user=request.user, product_id=product_id).delete()
        else:
            cart = request.session.get('cart', {})
            if str(product_id) in cart:
                del cart[str(product_id)]
                request.session['cart'] = cart
        return redirect('cart')

# Update quantity
def update_quantity(request, product_id):
    if request.method == 'POST':
        quantity = int(request.POST.get('quantity'))
        if quantity < 1:
            return redirect('cart')
        if request.user.is_authenticated:
            cart_item = CartItem.objects.get(user=request.user, product_id=product_id)
            cart_item.quantity = quantity
            cart_item.save()
        else:
            cart = request.session.get('cart', {})
            if str(product_id) in cart:
                cart[str(product_id)] = quantity
                request.session['cart'] = cart
        return redirect('cart')