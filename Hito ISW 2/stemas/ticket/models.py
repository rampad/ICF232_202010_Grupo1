from django.db import models
from django.contrib.auth.models import User


class Ticket3(models.Model):
    codigo=models.CharField(max_length=50)
    area=models.CharField(max_length=50)
    detalle=models.CharField(max_length=600)
    prioridadarea=models.CharField(max_length=50)
    estado=models.CharField(max_length=50)
    usuario_creador=models.ForeignKey(User, null=False,blank=False, on_delete=models.CASCADE)
    hora=models.CharField(max_length=50)
    fecha=models.CharField(max_length=50)
    resumen=models.CharField(max_length=100)
    

class EditTicket2(models.Model):
    detalle=models.CharField(max_length=600)
    hora=models.CharField(max_length=50)
    fecha=models.CharField(max_length=50)
    id_Usuario=models.ForeignKey(User, null=False,blank=False, on_delete=models.CASCADE)
    id_ticket=models.OneToOneField(Ticket3,null=False,blank=False, on_delete=models.CASCADE)


class Prioridad(models.Model):
    priotidad=models.CharField(max_length=50)


class Prioridads:
    def __init__(self,sigla):
        self.sigla=sigla

class PrioridadFactory:
    def __init__(self):
        self.prioridadss=[]
        self.prioridadss.append(Prioridads("Baja"))
        self.prioridadss.append(Prioridads("Media"))
        self.prioridadss.append(Prioridads("Alta"))
    
    def obtenerPrioridad(self):
        return self.prioridadss


class Estado(models.Model):
    priotidad=models.CharField(max_length=50)


class Estados:
    def __init__(self,sigla):
        self.sigla=sigla

class EstadodFactory:
    def __init__(self):
        self.estadoss=[]
        self.estadoss.append(Estados("Activo"))
        self.estadoss.append(Estados("En Proceso"))
        self.estadoss.append(Estados("Rechazado"))
        self.estadoss.append(Estados("Resuelto"))
    
    def obtenerPrioridad(self):
        return self.estadoss

class Activo(models.Model):
    activos=models.CharField(max_length=50)


class Activoss:
    def __init__(self,sigla):
        self.sigla=sigla

class ActivoFactory:
    def __init__(self):
        self.activosss=[]
        self.activosss.append(Activoss(False))
        self.activosss.append(Activoss(True))
    
    def obteneractivo(self):
        return self.activosss
# Create your models here.
