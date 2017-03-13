<?php
include 'includes/header.php';
include 'includes/menu.php';?>
        <section >
            <figure>
                <img src="img/kart.jpg" alt="boot gebruikt bij wadtochten" />

            </figure>
            <article>
                <table>
                    <caption style="margin-bottom: 10px;">
                      Er zijn <?= count($soortActiviteiten);?> soorten activiteiten
                    </caption>
                   <thead>
                       <tr>
                           <td><b>naam</b></td>
                           <td><b>prijs</b></td>
                           <td><b>tijdsduur</b></td>
                           <td><b>min. leeftijd</b></td>
                       </tr>
                   </thead>
                   <tbody>
                   <?php foreach($soortActiviteiten as $soortActiviteit):?>
                       <tr>
                           <td>
                               <?= $soortActiviteit->getNaam();?>
                           </td>
                           <td>
                               <?= "&euro;".number_format($soortActiviteit->getPrijs(),2,',','.');?>
                           </td>
                           <td>
                               <?= $soortActiviteit->getTijdsduur().' min';?>
                           </td>
                           <td>
                               <?= $soortActiviteit->getMin_leeftijd();?>
                           </td>
                       </tr>
                   <?php endforeach;?>
                   </tbody>
               </table>
             </br>
                    <p>
                    Let op, voor het karten zijn dichte schoenen verplicht.
                        Karten met een korte broek is niet toegestaan. Wij hebben overalls ter beschikking,
                        maar probeer indien mogelijk een lange broek aan te doen of mee te nemen.
                    </p>
            </article>

        </section>
<?php include 'includes/footer.php';
