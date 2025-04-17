from django.db import models

class Product(models.Model):
    product_Title = models.CharField(max_length=25)
    product_Description = models.TextField(blank=True)
    product_Price = models.CharField(max_length=10)