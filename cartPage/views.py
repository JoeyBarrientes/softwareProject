from django.shortcuts import render

# Create your views here.

def cart(request):
    return render(request, 'Cart.html')

def confirmation(request):
    if request.method == 'POST':
        # Retrieve form data from the POST request
        name = request.POST.get('name')
        number = request.POST.get('number')
        email = request.POST.get('email')
        address = request.POST.get('address')

        # Pass the data to the template context
        context = {
            'name': name,
            'number': number,
            'email': email,
            'address': address,
        }
        return render(request, 'Confirmation.html', context)
    return render(request, 'Confirmation.html')