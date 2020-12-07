from django.conf.urls import url,re_path
from django.urls import path,include
from ticket import views
from ticket.views import CrearTicket_view, usuario_delete,usuario_editor
from django.contrib.auth import authenticate, login
from django.contrib.auth.decorators import login_required



urlpatterns=[
    url(r'^$', views.HomePageView.as_view(),name='index'),
    url(r'panel/', views.HomePagePanel.as_view(),name="panel"),
    url(r'usuarios/', views.VistaUsuario_View.as_view(),name="usuarios"),
    url(r'^eliminar_usuario/(?P<id_usuario>\d+)/$',login_required(usuario_delete),name='usuario_delete'),
    url(r'^editar_usuario/(?P<id_usuario>\d+)/$',login_required(usuario_editor),name='usuario_edit'),
    url(r'^crearticket/',login_required(CrearTicket_view),name='ticket_crear'),
    path('accounts/', include('accounts.urls')),
    path('accounts/', include('django.contrib.auth.urls')),
    ]