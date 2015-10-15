<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VIPGUEST - DEMO</title>

        <link rel="stylesheet" href="<?php echo URL; ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo URL; ?>css/themes/demo/style.css">
    </head>
    <script src="<?php echo URL;?>js/jquery-1.11.1.min.js"></script>
    <script>
        
        function timer() {
                var fecha = new Date('2016', '09', '06', '07', '00', '00')
                var hoy = new Date()
                var dias = 0
                var horas = 0
                var minutos = 0
                var segundos = 0
                var textoDias, textoHoras;

                if (fecha > hoy) {
                    var diferencia = (fecha.getTime() - hoy.getTime()) / 1000;
                    dias = Math.floor(diferencia / 86400)
                    diferencia = diferencia - (86400 * dias)
                    horas = Math.floor(diferencia / 3600)
                    diferencia = diferencia - (3600 * horas)
                    minutos = Math.floor(diferencia / 60)
                    diferencia = diferencia - (60 * minutos)
                    segundos = Math.floor(diferencia)

                    if (dias != 0) {
                        textoDias = "days";
                    } else {
                        textoDias = "day";
                    }
                    if (horas != 0) {
                        textoHoras = "hours";
                    } else {
                        textoHoras = "hour";
                    }

                    var textoMins="mins";
                    var textoSegs="secs";

                    document.querySelector('[txt-dias]').textContent = textoDias;
                    document.querySelector('[txt-horas]').textContent = textoHoras;
                    document.querySelector('[txt-mins]').textContent = textoMins;
                    document.querySelector('[txt-segs]').textContent = textoSegs;
                    document.querySelector('[data-dias]').textContent = dias;
                    document.querySelector('[data-horas]').textContent = horas;
                    document.querySelector('[data-mins]').textContent = minutos;
                    document.querySelector('[data-segs]').textContent = segundos;
                   

                    if (dias > 0 || horas > 0 || minutos > 0 || segundos > 0) {
                        setTimeout(timer, 1000)
                    }

                }
            }
  
            $( document ).ready(function() {
                
                timer();
                
                $("#sidebar").hover(
                        function () {
                            $(".menu-title").stop(true, true).show('2000');
                            $("#logo").hide().html('VIPGUEST.COM').stop(true, true).fadeIn('2000');
                        }, function () {
                    $(".menu-title").stop(true, true).hide('2000');
                    $("#logo").hide().html('VG').stop(true, true).fadeIn('2000');
                });
            });


        </script>
    <body>
        

