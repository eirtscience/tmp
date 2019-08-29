from django.urls import path, include
from . import views

urlpatterns = [
    path('', views.EmailHandler.as_view())
]
