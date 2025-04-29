from django.shortcuts import render
from .models import Product
from django.db.models import Q  # for search filtering

# View for displaying all products
# def product(request):
#     products = Product.objects.all()
#     return render(request, 'Products.html', {'products': products})
from django.shortcuts import render
from .models import Product

# def product(request):
#     # Group products by category
#     categories = {}
#     for product in Product.objects.all():
#         if product.product_Category not in categories:
#             categories[product.product_Category] = []
#         categories[product.product_Category].append(product)
    
#     return render(request, 'Products.html', {'categories': categories})


# # View for handling search
# def search(request):
#     query = request.GET.get('q')
#     products = Product.objects.all()

#     if query:
#         products = products.filter(
#             Q(product_Title__icontains=query) |
#             Q(product_Description__icontains=query)
#         )

#     context = {
#         'products': products,
#         'query': query,
#     }
#     return render(request, 'Products.html', context)

# def product(request):
#     # Get search query and sorting parameters
#     query = request.GET.get('q', '')  # Get the search query from the request
#     categories = {}

#     # Filter products by search query (name or category)
#     products = Product.objects.all()
#     if query:
#         products = products.filter(
#             Q(product_Title__icontains=query) |
#             Q(product_Description__icontains=query) |
#             Q(product_Category__icontains=query)
#         )

#     # Group products by category
#     for product in products:
#         if product.product_Category not in categories:
#             categories[product.product_Category] = []
#         categories[product.product_Category].append(product)

#     return render(request, 'Products.html', {'categories': categories, 'query': query})

def product(request):
    # Get search query and sorting parameters
    query = request.GET.get('q', '')
    sort_by = request.GET.get('sort', '')

    # Filter products by search query (name or category)
    products = Product.objects.all()
    if query:
        products = products.filter(
            Q(product_Title__icontains=query) |
            Q(product_Description__icontains=query) |
            Q(product_Category__icontains=query)
        )

    # Sort products by price or quantity
    if sort_by == 'price':
        products = products.order_by('product_Price')  # Sort by price (ascending)
    elif sort_by == 'quantity':
        products = products.order_by('product_Quantity')  # Sort by quantity (ascending)

    # Group products by category
    categories = {}
    for product in products:
        if product.product_Category not in categories:
            categories[product.product_Category] = []
        categories[product.product_Category].append(product)

    return render(request, 'Products.html', {'categories': categories, 'query': query, 'sort_by': sort_by})