from django.shortcuts import render, redirect
from django.contrib.auth import authenticate, login, get_user_model
User = get_user_model()

def login_start(request):
    return render(request, 'Login.html')


def login_view(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        user = authenticate(request, username=username, password=password)
        if user is not None:
            login(request, user)
            return redirect('home')  # Redirect after login
        return render(request, 'Login.html', {'error': 'Invalid credentials'})
    return render(request, 'Login.html')
