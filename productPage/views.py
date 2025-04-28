from django.shortcuts import render
from .models import Product
from django.db.models import Q  # for search filtering

# View for displaying all products
def product(request):
    products = Product.objects.all()
    return render(request, 'Products.html', {'products': products})

# View for handling search
def search(request):
    query = request.GET.get('q')
    products = Product.objects.all()

    if query:
        products = products.filter(
            Q(product_Title__icontains=query) |
            Q(product_Description__icontains=query)
        )

    context = {
        'products': products,
        'query': query,
    }
    return render(request, 'Products.html', context)
