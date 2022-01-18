<?php
/**Counties in the Republic of Kenya,Governors and their Political Parties.*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/*You should not modify anything above this line*/

// @TODO : Your code starts here
$extrapolateData = explode(",",$county_data);
$arrlength = count($extrapolateData);
$unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kenya County mix</title>
  <meta name="author" content="Nekesa">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <style media="screen">
    #parties{
      background-color: #bde9ba;
    border: 2px #2b2b2b solid; }
th { background-color: #ffd78c;
 }
 tr {
   border: 2px #2b2b2b solid;
 }
 td{
   border: 2px #2b2b2b solid;
 }
 h1{
   align-items: center;
 }
tfoot { background-color: #ffd78c;
 }
 p{
   font-weight: bold;
   font-size: 30px;
 }

    </style>

</head>

<body>



<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
    </a>

  </div>

    </div>
  </div>
</nav>
        <div class="container">
			<table id="parties" class="table is-bordered">
        <p>The Government of Kenya County Mix</p>
        <img  right ="70%", width="10%", height="40%"  src="images/kenya.png">

          <thead>
            <tr>
              <th>#Rank </th>
              <th>Name</th>
              <th>Governor</th>
              <th>Party</th>
              <th>Website</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $n=1;

            for($x = 0; $x < $arrlength; $x++) {
              $getData = explode(" – ",$extrapolateData[$x]);
              $datalength = count($getData);?>
            <tr>

              <td><?php echo $n++?></td>

              <td>
                <?php
				$unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
				 echo $countyName = str_replace($unwantedCharacters, "",$getData[0]);
              ?>
              </td>

			  <td>
          <?php
          if(!empty($getData[2])){
            echo $getData[1];
            if($getData[2]=="ODM"){ ?>
            <img width="6%" height="30%" src="images\odm.jpg"/>
            <?php }elseif ($getData[2]=="Jubilee"){ ?>
            <img width="6%" height="30%" src="images/jubilee.png"/>
            <?php }elseif ($getData[2]=="KANU"){ ?>
            <img width="5%" height="30%" src="images\kanu.png">
            <?php }elseif ($getData[2]=="WDM K"||$getData[2]=="  <tr>
                  <td>KANU</td>
                  <td>25</td>
                </tr>"){ ?>
            <img width="5%" height="30%" src="">
            <?php } elseif ($getData[2]=="CCM"){ ?>
            <img width="5%" height="30%" src="images\ccm.jpg">
            <?php } elseif ($getData[2]=="FORD Kenya"){ ?>
            <img width="5%" height="30%" src="images\download.png">
            <?php } elseif ($getData[2]=="Narc Kenya"){ ?>
            <img width="5%" height="30%" src="images\narc.gif">
            <?php }
                }
            else {
              if(strpos($getData[1],"- Jubilee")){
                echo str_replace("- Jubilee","",$getData[1]);?>
                  <img width="5%" height="30%" src="odm.jpg">
        <?php }
              else if(strpos($getData[1],"- ODM")){
                echo str_replace("- ODM","",$getData[1]);?>
        <img width="5%" height="30%" src="jubilee.png">
        <?php }
            }?>
      </td>
              </td>

              <td><?php
              if(!empty($getData[2])){
                if($getData[2] == "WDM K."){
                  echo "WDM K";
                }else{
                  echo $getData[2];
                }
              }
              else {
                if(strpos($getData[1],"- Jubilee")){
                  echo "Jubilee";

                }
                elseif(strpos($getData[1],"- ODM")){
                    echo "ODM";
                }
              }?></td>

              <?php
                $countyName = str_replace($unwantedCharacters, "", $getData[0]);

				$unwantedValuesinlink = array('-'," "," ' ");
                $link = (str_replace($unwantedValuesinlink, '', $countyName));?>

        <td><a target="_BLANK"
            href="http://<?php echo $link?>.go.ke">http://<?php echo $link;?>.go.ke</a></td>
            </tr>
            <?php
              }
            ?>
          </tbody>


      ?>
      <tr>
          <th colspan="4">Distribution of Governors in Political Parties</th>
      </tr>
      <tr>
          <th colspan="2" class="thead">Party</th>
          <th colspan="2" class="thead">No of Governors</th>
      </tr>
      <tr>
          <td>Jubilee</td>
          <td>25</td>
        </tr>
        <tr>
            <td>ODM</td>
            <td>14</td>
          </tr>
          <tr>
              <td>KANU</td>
              <td>1</td>
            </tr>
            <tr>
                <td>CCM</td>
                <td>1</td>
              </tr>
              <tr>
                  <td>Narc</td>
                  <td>1</td>
                </tr>
                <tr>
                    <td>WMD K</td>
                    <td>2</td>
                  </tr>
                <tr>
                    <td>Ford Kenya</td>
                    <td>1</td>
                  </tr>
                  <td>Independent</td>
                  <td>2</td>
                </tr
  </tfoot>
        </table>

		</div>

</body>

</html>
