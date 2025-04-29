from django.db import models
# from django.contrib.auth.models import User
from django.conf import settings 

class Product(models.Model):
    product_Title = models.CharField(max_length=25)
    product_Description = models.TextField(blank=True)
    product_Price = models.DecimalField(max_digits=10, decimal_places=2)
    product_Quantity = models.PositiveIntegerField(default=0)  # Quantity field
    product_Category = models.CharField(max_length=50, blank=True)  # Category field
    product_Image = models.ImageField(upload_to='homePage/static/images', blank=True, null=True)  # Image field

    def __str__(self):
        return self.product_Title
