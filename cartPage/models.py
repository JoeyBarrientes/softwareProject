from django.db import models
from django.conf import settings
from productPage.models import Product

class CartItem(models.Model):
    user = models.ForeignKey(settings.AUTH_USER_MODEL, on_delete=models.CASCADE, null=True, blank=True)
    product = models.ForeignKey(Product, on_delete=models.CASCADE)
    quantity = models.PositiveIntegerField(default=1)

    def __str__(self):
        return f"{self.product.product_Title} ({self.quantity})"

    def get_total_price(self):
        return float(self.product.product_Price) * self.quantity
