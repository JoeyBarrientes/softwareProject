from django.urls import path
from . import views

urlpatterns = [
    path('login-page/', views.login_start, name='login-page'),
    path('login/', views.login_view, name='login'),
    path('registration/', views.registration_view, name='registration'),
]