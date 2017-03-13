<?php   
include 'includes/header.php';
include 'includes/menu.php';?>
        <section >
            <figure>              
                <img src="img/kart.jpg" alt="boot gebruikt bij wadtochten" />
               
            </figure>
            <article>
                <b>Er zijn <?= count($soortActiviteiten);?> soorten activiteiten </b>
                <ul>
                     <?php foreach($soortActiviteiten as $soortActiviteit):?>
                        <li>
                            <?= $soortActiviteit->getNaam();?>

                        </li>
                        <?php  endforeach;?>

                </ul>
                    <p>
                    Let op, voor het karten zijn dichte schoenen verplicht. 
                        Karten met een korte broek is niet toegestaan. Wij hebben overalls ter beschikking, 
                        maar probeer indien mogelijk een lange broek aan te doen of mee te nemen. 
                    </p>
            </article>
            
        </section>
<?php include 'includes/footer.php';