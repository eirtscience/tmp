from django.shortcuts import render
from rest_framework.views import APIView
from .mailer import Mailer
from django.http import JsonResponse


# Create your views here.


class EmailHandler(APIView):
    
    def get(self,request):
       
        mail = Mailer()
        mail.send_messages(subject='My App account verification',
                   template='email_worker/customer_verification.html',
                   context={'customer': self},
                   to_emails=["malevae@gmail.com"])
        return JsonResponse({"success":"true"})