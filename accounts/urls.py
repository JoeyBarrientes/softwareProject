from django.urls import path
from .views import user_login, check_auth

urlpatterns = [
    path('api/login/', user_login, name='login'),
    path('api/check-auth/', check_auth, name='check_auth'),
]