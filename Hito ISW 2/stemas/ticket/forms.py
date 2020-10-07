from django import forms

from .models import Ticket3
from django.contrib.auth.models import User

class CrearTicketForms(forms.ModelForm):

    class Meta:
        model=Ticket3

        fields = [
            'usuario_creador',
            'codigo',
            'area',
            'prioridadarea',
            'resumen',
            'detalle',
            'fecha',
            'hora',
            'estado',
        ]

        labels = {
            'usuario_creador': 'Usario_Creador',
            'codigo': 'Codigo',
            'area': 'Area',
            'prioridadarea': 'Prioridadarea',
            'resumen':'Resumen',
            'detalle': 'Detalle',
            'fecha': 'Fecha',            
            'hora': 'Hora',
            'estado': 'Estado',
        }
     
        widgets={

            'usuario_creador': forms.TextInput(attrs={'class':'form-control'}),
            'codigo': forms.TextInput(attrs={'class':'form-control'}),
            'area': forms.TextInput(attrs={'class':'form-control'}),
            'prioridadarea': forms.TextInput(attrs={'class':'form-control'}),
            'resumen': forms.TextInput(attrs={'class':'form-control'}),
            'detalle': forms.TextInput(attrs={'class':'form-control'}),
            'fecha': forms.TextInput(attrs={'class':'form-control'}),
            'hora': forms.TextInput(attrs={'class':'form-control'}),
            'estado': forms.TextInput(attrs={'class':'form-control'}),
        }

class UsuarioForm(forms.ModelForm):
    class Meta:
        model=User
        fields = [
            'username',
            'first_name',
            'last_name',
            'email',
            'is_active',
        ]

        labels = {

            'username':'Username',
            'first_name':'First_name',
            'last_name':'Last_name',
            'email':'Email',
            'is_active':'Is_active',
        }

        widgets={

            'username': forms.TextInput(attrs={'class':'form-control'}),
            'first_name': forms.TextInput(attrs={'class':'form-control'}),
            'last_name': forms.TextInput(attrs={'class':'form-control'}),
            'email': forms.TextInput(attrs={'class':'form-control'}),
            'is_active': forms.TextInput(attrs={'class':'form-control'}),

        }


