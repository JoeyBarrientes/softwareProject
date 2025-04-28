from django.shortcuts import render, redirect
from django.contrib.auth import authenticate, login, get_user_model
from django.contrib.auth.hashers import make_password
User = get_user_model()

def login_start(request):
    return render(request, 'Login.html')
    return render(request, 'Registration.html')


def login_view(request):
    if request.user.is_authenticated:
        return redirect('home') 

    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        user = authenticate(request, username=username, password=password)
        if user is not None:
            login(request, user)
            return redirect('home')
        return render(request, 'Login.html', {'error': 'Invalid credentials'})
    return render(request, 'Login.html')

def registration_view(request):
    if request.method == 'POST':
        email = request.POST.get('email')
        username = request.POST.get('username')
        password = request.POST.get('password')

        # Check if user already exists
        if User.objects.filter(username=username).exists():
            return render(request, 'Registration.html', {'error': 'Username already exists'})

        # Create new user
        new_user = User.objects.create(
            username=username,
            email=email,
            password=make_password(password)  # Hash the password
        )


        login(request, new_user)
        return redirect('home')  # Redirect wherever you want after register

    return render(request, 'Registration.html')