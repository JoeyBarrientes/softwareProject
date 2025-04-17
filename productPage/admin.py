from django.contrib import admin
from .models import Product

@admin.register(Product)
class productAdmin(admin.ModelAdmin):
    list_display = ('product_Title' , 'product_Description' , 'product_Price')

# Register your models here.
