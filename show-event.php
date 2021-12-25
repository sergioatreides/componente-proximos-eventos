<?php
date_default_timezone_set('Europe/Madrid');
setlocale(LC_ALL,'es_ES');
include('GetEvents.php');

$events = getNextEvents();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="event-styles-dist.css" type="text/css">
</head>
<body>
<?php if($events && count($events) > 0) { ?>
<section>
    <div class="events-container">
        <header class="events-container__title">
            <h3>Próximos eventos</h3><img class="events-container__title-ico" src="/img/icons/open.png">
        </header>
        <div class="events-container__list">
            <?php
                foreach($events as $singleEvent) { 
            ?>
                    
            

            
            <article class="events-container__list__event">
                <header class="events-container__list__event-title">
                    <div class="events-container__list__event-title__date">
                        <p><?php echo $singleEvent->getFormatedMonth();?></p>
                        <p><?php echo $singleEvent->getFormatedDay();?></p>
                    </div>
                    <div class="events-container__list__event-head">     
                        <h4 class="events-container__list__event-head__title">
                            <a class="events-container__link" href="<?php echo $singleEvent->url;?>"><?php echo $singleEvent->name ?><img class="events-container__link-ico" src="/img/icons/open.png"></a>
                        </h4>
                        <p class="events-container__list__event-head__p">
                            <?php 
                                echo $singleEvent->city;
                                if($singleEvent->city != $singleEvent->province) {
                                    echo ", " . $singleEvent->province;
                                }
                            ?>
                        </p>
                        <p class="events-container__list__event-head__p">13:30 - 16:00 h</p>
                    </div> 
                </header>  
                <div class="events-container__list__event--image">
                <a class="events-container__link" href="<?php echo $singleEvent->url;?>"><img src="<?php echo $singleEvent->image;?>"></a>
                </div>
            </article>  
            

            <?php } ?>
        </div>
        <div class="events-container__ver">
            <a class="events-container__link" href="">Ver calendario de eventos<img class="events-container__link-ico" src="/img/icons/open.png"></a>
        </div>
    </div>
</section>
<?php } else { echo "No hay eventos programados"; }?>
</body>
</html>