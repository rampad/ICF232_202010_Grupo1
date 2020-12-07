from django.shortcuts import render,redirect
from django.views.generic import TemplateView

from django.urls import reverse_lazy
from django.views import generic

from django.contrib.auth.mixins import LoginRequiredMixin

from .forms import CrearTicketForms, UsuarioForm

from .models import PrioridadFactory, EstadodFactory, Ticket3, ActivoFactory
from django.contrib.auth.models import User
from datetime import datetime


import string
import random

KEY_LEN = 10

def base_str():
    return (string.ascii_letters+string.digits)   

def key_gen():
    keylist = [random.choice(base_str()) for i in range(KEY_LEN)]
    return ("".join(keylist))



class HomePageView(LoginRequiredMixin,TemplateView):
    def get(self, request, **kwargs):
        usuarios=User.objects.all()
        return render(request,'index.html',{'usu':usuarios})


class HomePagePanel(LoginRequiredMixin,TemplateView):
    def get(self, request, **kwargs):
        prioridadfactory=PrioridadFactory()
        tickets=Ticket3.objects.all()
        usuarios=User.objects.all()
        estadofactory=EstadodFactory()
        now=datetime.now()
        keylist = [random.choice(base_str()) for i in range(KEY_LEN)]
        return render(request,'panel.html',{'prioridades': prioridadfactory.obtenerPrioridad(), 'usu':usuarios,
                                            'random':("".join(keylist)), 'fecha':(now.date), "hora":now.time,
                                            'estados':estadofactory.obtenerPrioridad(), 'ticket':tickets})

def CrearTicket_view(request):
    prioridadfactory=PrioridadFactory()
    now=datetime.now()
    keylist = [random.choice(base_str()) for i in range(KEY_LEN)]
    if request.method == 'POST':
        form = CrearTicketForms(request.POST)
        if form.is_valid():
            form.save()
            return redirect('panel')
        else:
            return redirect('/crearticket')        
    else:
        form=CrearTicketForms()
    return render(request, 'crearticket.html',{'form':form, 'prioridades': prioridadfactory.obtenerPrioridad(),
                                               'random':("".join(keylist)),
                                               'fecha':(now.date()), "hora":now.time})

class VistaUsuario_View(LoginRequiredMixin,TemplateView):
    def get(self, request, **kwargs):
        usur=User.objects.all()
        return render(request,'vistausuaruios.html',{'usu':usur})

def usuario_editor(request, id_usuario):
    usuario=User.objects.get(id=id_usuario)
    estado=ActivoFactory()
    if request.method=='GET':
        form=UsuarioForm(instance=usuario)
    else:
        form=UsuarioForm(request.POST, instance=usuario)
        if form.is_valid():
            form.save()
        return redirect('/usuarios')
    return render(request,'usuario_edit.html',{'form':form, 'usuari':usuario, 'estados':estado.obteneractivo()})

def usuario_delete(request, id_usuario):
    usuario=User.objects.get(id=id_usuario)
    if request.method == 'POST':
        usuario.delete()
        return redirect('/usuarios')
    return render(request, 'usuario_delete.html', {'usuario':usuario})


# Create your views here.
