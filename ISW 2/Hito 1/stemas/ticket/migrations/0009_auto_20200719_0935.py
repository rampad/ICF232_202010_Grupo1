# Generated by Django 3.0.8 on 2020-07-19 09:35

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('ticket', '0008_auto_20200719_0933'),
    ]

    operations = [
        migrations.AlterField(
            model_name='ticket3',
            name='usuario_creador',
            field=models.CharField(max_length=50),
        ),
    ]