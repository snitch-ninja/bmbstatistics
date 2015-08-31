?>
<html>
<head>
	<title>Stats</title>
	<link rel="stylesheet" type="text/css" href="scripts/css/main.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/javascript/graph.js"></script>
	<script type="text/javascript" src="scripts/javascript/main.js"></script>
</head>
<body>
	<!--img id="background" src="resources/plundercrab_bg.jpg" style="position:absolute;width:100%;height:100%"></img-->
	<div class="header"><h1>BMB Statistics</h1></div>
	<div class="left champion slide option" style="top:25%"><div class="text">By champion</div></div>
	<div class="left brawler slide option" style="top:35%"><div class="text">By brawler</div></div>

	<div class="right champion slide option" style="top:40%"><div class="text">Win rate vs Pick rate</div></div>
	<div class="right champion option" style="top:50%">
		<select id="champSelect" style="position:absolute;top:50%;left:50%;transform-origin:50% 50%;transform:translate(-50%, -50%);">
			<option value="none">View champion data</option>
			<option value="266">Aatrox</option><option value="103">Ahri</option><option value="84">Akali</option><option value="12">Alistar</option><option value="32">Amumu</option><option value="34">Anivia</option><option value="1">Annie</option><option value="22">Ashe</option><option value="268">Azir</option><option value="432">Bard</option><option value="53">Blitzcrank</option><option value="63">Brand</option><option value="201">Braum</option><option value="51">Caitlyn</option><option value="69">Cassiopeia</option><option value="31">Chogath</option><option value="42">Corki</option><option value="122">Darius</option><option value="131">Diana</option><option value="36">DrMundo</option><option value="119">Draven</option><option value="245">Ekko</option><option value="60">Elise</option><option value="28">Evelynn</option><option value="81">Ezreal</option><option value="9">FiddleSticks</option><option value="114">Fiora</option><option value="105">Fizz</option><option value="3">Galio</option><option value="41">Gangplank</option><option value="86">Garen</option><option value="150">Gnar</option><option value="79">Gragas</option><option value="104">Graves</option><option value="120">Hecarim</option><option value="74">Heimerdinger</option><option value="39">Irelia</option><option value="40">Janna</option><option value="59">JarvanIV</option><option value="24">Jax</option><option value="126">Jayce</option><option value="222">Jinx</option><option value="429">Kalista</option><option value="43">Karma</option><option value="30">Karthus</option><option value="38">Kassadin</option><option value="55">Katarina</option><option value="10">Kayle</option><option value="85">Kennen</option><option value="121">Khazix</option><option value="96">KogMaw</option><option value="7">Leblanc</option><option value="64">LeeSin</option><option value="89">Leona</option><option value="127">Lissandra</option><option value="236">Lucian</option><option value="117">Lulu</option><option value="99">Lux</option><option value="54">Malphite</option><option value="90">Malzahar</option><option value="57">Maokai</option><option value="11">MasterYi</option><option value="21">MissFortune</option><option value="62">MonkeyKing</option><option value="82">Mordekaiser</option><option value="25">Morgana</option><option value="267">Nami</option><option value="75">Nasus</option><option value="111">Nautilus</option><option value="76">Nidalee</option><option value="56">Nocturne</option><option value="20">Nunu</option><option value="2">Olaf</option><option value="61">Orianna</option><option value="80">Pantheon</option><option value="78">Poppy</option><option value="133">Quinn</option><option value="33">Rammus</option><option value="421">RekSai</option><option value="58">Renekton</option><option value="107">Rengar</option><option value="92">Riven</option><option value="68">Rumble</option><option value="13">Ryze</option><option value="113">Sejuani</option><option value="35">Shaco</option><option value="98">Shen</option><option value="102">Shyvana</option><option value="27">Singed</option><option value="14">Sion</option><option value="15">Sivir</option><option value="72">Skarner</option><option value="37">Sona</option><option value="16">Soraka</option><option value="50">Swain</option><option value="134">Syndra</option><option value="223">TahmKench</option><option value="91">Talon</option><option value="44">Taric</option><option value="17">Teemo</option><option value="412">Thresh</option><option value="18">Tristana</option><option value="48">Trundle</option><option value="23">Tryndamere</option><option value="4">TwistedFate</option><option value="29">Twitch</option><option value="77">Udyr</option><option value="6">Urgot</option><option value="110">Varus</option><option value="67">Vayne</option><option value="45">Veigar</option><option value="161">Velkoz</option><option value="254">Vi</option><option value="112">Viktor</option><option value="8">Vladimir</option><option value="106">Volibear</option><option value="19">Warwick</option><option value="101">Xerath</option><option value="5">XinZhao</option><option value="157">Yasuo</option><option value="83">Yorick</option><option value="154">Zac</option><option value="238">Zed</option><option value="115">Ziggs</option><option value="26">Zilean</option><option value="143">Zyra</option>		</select>
	</div>

	<!--div class="right brawler slide option" style="top:10%"><div class="text">Brawler win rate vs pick rate</div></div-->
	<div class="right brawler slide option" style="top:20%"><div class="text">Brawler win rate</div></div>
	<div class="right brawler slide option" style="top:30%"><div class="text">Brawler pick rate</div></div>
	<div class="right brawler slide option" style="top:40%"><div class="text">Cuteness</div></div>

	<div class="right brawler option" style="top:50%">
		<select style="position:absolute;top:50%;left:50%;transform-origin:50% 50%;transform:translate(-50%, -50%);">
			<option value="none">Popular for offense</option>
			<option value="brawleroffenseitems">By items</option>
			<option value="brawlerdmgdealt">By damage dealt</option>
		</select>
	</div>
	<div class="right brawler option" style="top:60%">
 		<select style="position:absolute;top:50%;left:50%;transform-origin:50% 50%;transform:translate(-50%, -50%);">
			<option value="none">Popular for defense</option>
			<option value="brawlerdefenseitems">By items</option>
			<option value="brawlerdmgtaken">By damage taken</option>
		</select>
	</div>
	<div class="right brawler option" style="top:70%">
		<select id="brawlerSelect" style="position:absolute;top:50%;left:50%;transform-origin:50% 50%;transform:translate(-50%, -50%);">
			<option value="none">Item popularity on</option>
			<option value="razorfinitems">Razorfin</option>
			<option value="ironbackitems">Ironback</option>
			<option value="plundercrabitems">Plundercrab</option>
			<option value="ocklepoditems">Ocklepod</option>
		</select>
	</div>
	<div class="presentation">
		<div class="graph">
			<img id="arrow" src="resources/arrow.png"></img>
			<div class="data" style="display:none;width:100%;height:100%">

				<div class="Brawlerwinratevspickrate" style="display:none;width:100%;height:100%">
					<img value="Razorfins" src="resources/brawlers/Razorfins-thumbnail.png" title="31.84%, 51.95%" style="position:absolute;left:31.84%;bottom:51.95%;"></img><img value="Ironbacks" src="resources/brawlers/Ironbacks-thumbnail.png" title="33.26%, 50.57%" style="position:absolute;left:33.26%;bottom:50.57%;"></img><img value="Plundercrabs" src="resources/brawlers/Plundercrabs-thumbnail.png" title="22.35%, 48.23%" style="position:absolute;left:22.35%;bottom:48.23%;"></img><img value="Ocklepods" src="resources/brawlers/Ocklepods-thumbnail.png" title="11.84%, 47.13%" style="position:absolute;left:11.84%;bottom:47.13%;"></img>				</div>

				<div class="Brawlerwinrate four" style="display:none;width:100%;height:100%">
					<div class="horizontalBar" title="51.95%" value="Razorfins"    style="width:0%;" desc="win chance">
						<img src="resources/brawlers/razorfins-thumbnail.png"></img>
					</div>
					<div class="horizontalBar" title="50.57%" value="Ironbacks"    style="width:0%;" desc="win chance">
						<img src="resources/brawlers/ironbacks-thumbnail.png"></img>
					</div>
					<div class="horizontalBar" title="48.23%" value="Plundercrabs" style="width:0%;" desc="win chance">
						<img src="resources/brawlers/plundercrabs-thumbnail.png"></img>
					</div>
					<div class="horizontalBar" title="47.13%" value="Ocklepods"    style="width:0%;" desc="win chance">
						<img src="resources/brawlers/ocklepods-thumbnail.png"></img>
					</div>
				</div>

				<div class="Brawlerpickrate five" style="display:none;width:100%;height:100%">
					<div class="horizontalBar" title="31.84%" value="Razorfins"    style="width:0%;" desc="pick chance">
						<img src="resources/brawlers/razorfins-thumbnail.png"></img>
					</div>
					<div class="horizontalBar" title="33.26%" value="Ironbacks"    style="width:0%;"desc="pick chance">
						<img src="resources/brawlers/ironbacks-thumbnail.png"></img>
					</div>
					<div class="horizontalBar" title="22.35%" value="Plundercrabs" style="width:0%;"desc="pick chance">
						<img src="resources/brawlers/plundercrabs-thumbnail.png"></img>
					</div>
					<div class="horizontalBar" title="11.84%" value="Ocklepods"    style="width:0%;"desc="pick chance">
						<img src="resources/brawlers/ocklepods-thumbnail.png"></img>
					</div>
					<div class="horizontalBar" title="0.71%" value="None"         style="width:0%;"desc="pick chance">
					</div>
				</div>

				<div class="Cuteness" style="display:none;width:100%;height:100%">
					<div class="four">
							<div class="horizontalBar" title="32.29%" value="Razorfins"       desc="picks by cute champs" style="width:0%;">
								<img src="resources/brawlers/razorfins-thumbnail.png"></img>
								<!--span class="horizontalLabel" title="32.29%">Razorfins</span-->
							</div>
							<div class="horizontalBar" title="28.65%" value="Ironbacks"       desc="picks by cute champs" style="width:0%;">
								<img src="resources/brawlers/ironbacks-thumbnail.png"></img>
								<!--span class="horizontalLabel" title="28.65%">Ironbacks</span-->
							</div>
							<div class="horizontalBar" title="23.23%" value="Plundercrabs" desc="picks by cute champs" style="width:0%;">
								<img src="resources/brawlers/plundercrabs-thumbnail.png"></img>
								<!--span class="horizontalLabel" title="23.23%">Plundercrabs</span-->
							</div>
							<div class="horizontalBar" title="15.83%" value="Ocklepods"       desc="picks by cute champs" style="width:0%;">
								<img src="resources/brawlers/ocklepods-thumbnail.png"></img>
								<!--span class="horizontalLabel" title="15.83%">Ocklepods</span-->
							</div>
						</div>				</div>

				<div class="brawlerdmgdealt four" style="display:none;width:100%;height:100%">

					<div class="four">
							<div class="horizontalBar" title="25.84%" value="Razorfins"       desc="dmg dealt by buyers<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/razorfins-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="25.98%" value="Ironbacks"       desc="dmg dealt by buyers<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/ironbacks-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="26.03%" value="Plundercrabs" desc="dmg dealt by buyers<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/plundercrabs-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="22.16%" value="Ocklepods"       desc="dmg dealt by buyers<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/ocklepods-thumbnail.png"></img>
							</div>
						</div>
				</div>

				<div class="brawleroffenseitems four" style="display:none;width:100%;height:100%">
					
					
					<div class="four">
							<div class="horizontalBar" title="23.82%" value="Razorfins"       desc="chance that any item is offensive<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/razorfins-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="26.23%" value="Ironbacks"       desc="chance that any item is offensive<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/ironbacks-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="23.91%" value="Plundercrabs" desc="chance that any item is offensive<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/plundercrabs-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="26.04%" value="Ocklepods"       desc="chance that any item is offensive<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/ocklepods-thumbnail.png"></img>
							</div>
						</div>				</div>

				<div class="brawlerdefenseitems four" style="display:none;width:100%;height:100%">
					
					<div class="four">
							<div class="horizontalBar" title="26.35%" value="Razorfins"       desc="chance that any item is defensive<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/razorfins-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="24.4%" value="Ironbacks"       desc="chance that any item is defensive<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/ironbacks-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="26.48%" value="Plundercrabs" desc="chance that any item is defensive<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/plundercrabs-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="22.77%" value="Ocklepods"       desc="chance that any item is defensive<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/ocklepods-thumbnail.png"></img>
							</div>
						</div>				</div>

				<div class="brawlerdmgtaken four" style="display:none;width:100%;height:100%">

					<div class="four">
							<div class="horizontalBar" title="24.98%" value="Razorfins"       desc="dmg taken by buyers<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/razorfins-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="25.51%" value="Ironbacks"       desc="dmg taken by buyers<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/ironbacks-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="25.23%" value="Plundercrabs" desc="dmg taken by buyers<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/plundercrabs-thumbnail.png"></img>
							</div>
							<div class="horizontalBar" title="24.28%" value="Ocklepods"       desc="dmg taken by buyers<br />(percent of total)" style="width:0%;">
								<img src="resources/brawlers/ocklepods-thumbnail.png"></img>
							</div>
						</div>
				</div>



				<div class="WinratevsPickrate" style="display:none;width:100%;height:100%;border-bottom:1px solid white;border-left:1px solid white">
					<span style="position:absolute;transform-origin:0% 0%;top:0%    ;left:0px;transform:translate(-100%, -0%);font-variant:small-caps;">70%</span>
					<span style="position:absolute;transform-origin:0% 0%;bottom:50%;left:0px;transform:rotateZ(90deg);        font-variant:small-caps;" >win rate</span>
					<span style="position:absolute;transform-origin:0% 0%;bottom:0% ;left:0px;transform:translate(-100%, -0%);font-variant:small-caps;" >20%</span>
					<table style="width:100%;height:100%">
						
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
								
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
								
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
								
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
								
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
								
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
								
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
								
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
								
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
								
								<tr>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
									<td style="border-top:1px solid rgba(127, 127, 127, 127);border-right:1px solid rgba(127, 127, 127, 127);"></td>
								</tr>
													</table>
					<img value="Annie" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Annie.png" title="1.24%, 53.23%" style="position:absolute;left:41.33%;bottom:61.13%;"></img><img value="Olaf" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Olaf.png" title="0.33%, 54.55%" style="position:absolute;left:11%;bottom:63.64%;"></img><img value="Galio" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Galio.png" title="0.19%, 42.11%" style="position:absolute;left:6.33%;bottom:40%;"></img><img value="TwistedFate" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/TwistedFate.png" title="1.45%, 52.41%" style="position:absolute;left:48.33%;bottom:59.59%;"></img><img value="XinZhao" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/XinZhao.png" title="1.27%, 59.06%" style="position:absolute;left:42.33%;bottom:72.2%;"></img><img value="Urgot" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Urgot.png" title="0.15%, 46.67%" style="position:absolute;left:5%;bottom:48.67%;"></img><img value="Leblanc" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Leblanc.png" title="0.57%, 38.6%" style="position:absolute;left:19%;bottom:33.33%;"></img><img value="Vladimir" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Vladimir.png" title="0.66%, 54.55%" style="position:absolute;left:22%;bottom:63.64%;"></img><img value="FiddleSticks" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/FiddleSticks.png" title="0.44%, 54.55%" style="position:absolute;left:14.67%;bottom:63.64%;"></img><img value="Kayle" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Kayle.png" title="0.91%, 49.45%" style="position:absolute;left:30.33%;bottom:53.96%;"></img><img value="MasterYi" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/MasterYi.png" title="1.38%, 49.28%" style="position:absolute;left:46%;bottom:53.62%;"></img><img value="Alistar" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Alistar.png" title="0.56%, 50%" style="position:absolute;left:18.67%;bottom:55%;"></img><img value="Ryze" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ryze.png" title="0.14%, 21.43%" style="position:absolute;left:4.67%;bottom:0.71%;"></img><img value="Sion" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Sion.png" title="0.57%, 43.86%" style="position:absolute;left:19%;bottom:43.33%;"></img><img value="Sivir" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Sivir.png" title="0.77%, 50.65%" style="position:absolute;left:25.67%;bottom:56.23%;"></img><img value="Soraka" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Soraka.png" title="0.96%, 55.21%" style="position:absolute;left:32%;bottom:64.9%;"></img><img value="Teemo" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Teemo.png" title="1.51%, 50.99%" style="position:absolute;left:50.33%;bottom:56.89%;"></img><img value="Tristana" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Tristana.png" title="1.27%, 54.33%" style="position:absolute;left:42.33%;bottom:63.23%;"></img><img value="Warwick" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Warwick.png" title="1.13%, 55.75%" style="position:absolute;left:37.67%;bottom:65.93%;"></img><img value="Nunu" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nunu.png" title="0.49%, 53.06%" style="position:absolute;left:16.33%;bottom:60.82%;"></img><img value="MissFortune" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/MissFortune.png" title="2.68%, 54.1%" style="position:absolute;left:89.33%;bottom:62.8%;"></img><img value="Ashe" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ashe.png" title="2.28%, 50.44%" style="position:absolute;left:76%;bottom:55.83%;"></img><img value="Tryndamere" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Tryndamere.png" title="1.09%, 52.29%" style="position:absolute;left:36.33%;bottom:59.36%;"></img><img value="Jax" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Jax.png" title="1.08%, 50%" style="position:absolute;left:36%;bottom:55%;"></img><img value="Morgana" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Morgana.png" title="1.1%, 54.55%" style="position:absolute;left:36.67%;bottom:63.64%;"></img><img value="Zilean" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Zilean.png" title="0.23%, 26.09%" style="position:absolute;left:7.67%;bottom:9.57%;"></img><img value="Singed" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Singed.png" title="0.38%, 52.63%" style="position:absolute;left:12.67%;bottom:60%;"></img><img value="Evelynn" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Evelynn.png" title="0.65%, 44.62%" style="position:absolute;left:21.67%;bottom:44.77%;"></img><img value="Twitch" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Twitch.png" title="0.45%, 51.11%" style="position:absolute;left:15%;bottom:57.11%;"></img><img value="Karthus" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Karthus.png" title="0.27%, 48.15%" style="position:absolute;left:9%;bottom:51.48%;"></img><img value="Chogath" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Chogath.png" title="0.78%, 52.56%" style="position:absolute;left:26%;bottom:59.87%;"></img><img value="Amumu" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Amumu.png" title="0.42%, 54.76%" style="position:absolute;left:14%;bottom:64.05%;"></img><img value="Rammus" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Rammus.png" title="0.27%, 48.15%" style="position:absolute;left:9%;bottom:51.48%;"></img><img value="Anivia" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Anivia.png" title="0.34%, 41.18%" style="position:absolute;left:11.33%;bottom:38.24%;"></img><img value="Shaco" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Shaco.png" title="0.87%, 45.98%" style="position:absolute;left:29%;bottom:47.36%;"></img><img value="DrMundo" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/DrMundo.png" title="0.26%, 38.46%" style="position:absolute;left:8.67%;bottom:33.08%;"></img><img value="Sona" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Sona.png" title="1.35%, 43.7%" style="position:absolute;left:45%;bottom:43.04%;"></img><img value="Kassadin" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Kassadin.png" title="0.14%, 42.86%" style="position:absolute;left:4.67%;bottom:41.43%;"></img><img value="Irelia" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Irelia.png" title="0.62%, 50%" style="position:absolute;left:20.67%;bottom:55%;"></img><img value="Janna" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Janna.png" title="0.74%, 54.05%" style="position:absolute;left:24.67%;bottom:62.7%;"></img><img value="Corki" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Corki.png" title="0.38%, 50%" style="position:absolute;left:12.67%;bottom:55%;"></img><img value="Karma" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Karma.png" title="0.52%, 40.38%" style="position:absolute;left:17.33%;bottom:36.73%;"></img><img value="Taric" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Taric.png" title="0.3%, 60%" style="position:absolute;left:10%;bottom:74%;"></img><img value="Veigar" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Veigar.png" title="0.52%, 48.08%" style="position:absolute;left:17.33%;bottom:51.35%;"></img><img value="Trundle" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Trundle.png" title="0.37%, 64.86%" style="position:absolute;left:12.33%;bottom:83.24%;"></img><img value="Swain" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Swain.png" title="0.32%, 53.13%" style="position:absolute;left:10.67%;bottom:60.94%;"></img><img value="Caitlyn" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Caitlyn.png" title="1.58%, 51.9%" style="position:absolute;left:52.67%;bottom:58.61%;"></img><img value="Blitzcrank" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Blitzcrank.png" title="1.62%, 57.41%" style="position:absolute;left:54%;bottom:69.07%;"></img><img value="Malphite" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Malphite.png" title="0.7%, 48.57%" style="position:absolute;left:23.33%;bottom:52.29%;"></img><img value="Katarina" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Katarina.png" title="0.8%, 40%" style="position:absolute;left:26.67%;bottom:36%;"></img><img value="Nocturne" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nocturne.png" title="0.46%, 52.17%" style="position:absolute;left:15.33%;bottom:59.13%;"></img><img value="Maokai" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Maokai.png" title="0.51%, 47.06%" style="position:absolute;left:17%;bottom:49.41%;"></img><img value="Renekton" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Renekton.png" title="0.39%, 48.72%" style="position:absolute;left:13%;bottom:52.56%;"></img><img value="JarvanIV" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/JarvanIV.png" title="0.56%, 48.21%" style="position:absolute;left:18.67%;bottom:51.61%;"></img><img value="Elise" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Elise.png" title="0.84%, 47.62%" style="position:absolute;left:28%;bottom:50.48%;"></img><img value="Orianna" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Orianna.png" title="0.51%, 50.98%" style="position:absolute;left:17%;bottom:56.86%;"></img><img value="MonkeyKing" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/MonkeyKing.png" title="0.73%, 63.01%" style="position:absolute;left:24.33%;bottom:79.73%;"></img><img value="Brand" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Brand.png" title="0.57%, 52.63%" style="position:absolute;left:19%;bottom:60%;"></img><img value="LeeSin" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/LeeSin.png" title="1.09%, 44.04%" style="position:absolute;left:36.33%;bottom:43.67%;"></img><img value="Vayne" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Vayne.png" title="1.92%, 54.69%" style="position:absolute;left:64%;bottom:63.91%;"></img><img value="Rumble" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Rumble.png" title="0.27%, 59.26%" style="position:absolute;left:9%;bottom:72.59%;"></img><img value="Cassiopeia" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Cassiopeia.png" title="0.26%, 38.46%" style="position:absolute;left:8.67%;bottom:33.08%;"></img><img value="Skarner" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Skarner.png" title="0.2%, 50%" style="position:absolute;left:6.67%;bottom:55%;"></img><img value="Heimerdinger" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Heimerdinger.png" title="0.97%, 56.7%" style="position:absolute;left:32.33%;bottom:67.73%;"></img><img value="Nasus" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nasus.png" title="1.09%, 50.46%" style="position:absolute;left:36.33%;bottom:55.87%;"></img><img value="Nidalee" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nidalee.png" title="1.22%, 36.89%" style="position:absolute;left:40.67%;bottom:30.08%;"></img><img value="Udyr" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Udyr.png" title="0.91%, 57.14%" style="position:absolute;left:30.33%;bottom:68.57%;"></img><img value="Poppy" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Poppy.png" title="0.06%, 33.33%" style="position:absolute;left:2%;bottom:23.33%;"></img><img value="Gragas" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Gragas.png" title="0.27%, 48.15%" style="position:absolute;left:9%;bottom:51.48%;"></img><img value="Pantheon" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Pantheon.png" title="0.56%, 48.21%" style="position:absolute;left:18.67%;bottom:51.61%;"></img><img value="Ezreal" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ezreal.png" title="1.08%, 43.52%" style="position:absolute;left:36%;bottom:42.69%;"></img><img value="Mordekaiser" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Mordekaiser.png" title="0.28%, 53.57%" style="position:absolute;left:9.33%;bottom:61.79%;"></img><img value="Yorick" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Yorick.png" title="0.23%, 47.83%" style="position:absolute;left:7.67%;bottom:50.87%;"></img><img value="Akali" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Akali.png" title="0.42%, 50%" style="position:absolute;left:14%;bottom:55%;"></img><img value="Kennen" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Kennen.png" title="0.24%, 25%" style="position:absolute;left:8%;bottom:7.5%;"></img><img value="Garen" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Garen.png" title="1.12%, 50%" style="position:absolute;left:37.33%;bottom:55%;"></img><img value="Leona" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Leona.png" title="1.16%, 53.45%" style="position:absolute;left:38.67%;bottom:61.55%;"></img><img value="Malzahar" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Malzahar.png" title="0.76%, 47.37%" style="position:absolute;left:25.33%;bottom:50%;"></img><img value="Talon" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Talon.png" title="0.46%, 63.04%" style="position:absolute;left:15.33%;bottom:79.78%;"></img><img value="Riven" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Riven.png" title="0.92%, 40.22%" style="position:absolute;left:30.67%;bottom:36.41%;"></img><img value="KogMaw" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/KogMaw.png" title="0.83%, 46.99%" style="position:absolute;left:27.67%;bottom:49.28%;"></img><img value="Shen" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Shen.png" title="0.68%, 55.88%" style="position:absolute;left:22.67%;bottom:66.18%;"></img><img value="Lux" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Lux.png" title="1.48%, 45.95%" style="position:absolute;left:49.33%;bottom:47.3%;"></img><img value="Xerath" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Xerath.png" title="0.45%, 53.33%" style="position:absolute;left:15%;bottom:61.33%;"></img><img value="Shyvana" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Shyvana.png" title="1.26%, 64.29%" style="position:absolute;left:42%;bottom:82.14%;"></img><img value="Ahri" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ahri.png" title="1.12%, 52.68%" style="position:absolute;left:37.33%;bottom:60.09%;"></img><img value="Graves" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Graves.png" title="1.22%, 54.1%" style="position:absolute;left:40.67%;bottom:62.79%;"></img><img value="Fizz" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Fizz.png" title="1.41%, 48.23%" style="position:absolute;left:47%;bottom:51.63%;"></img><img value="Volibear" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Volibear.png" title="0.54%, 55.56%" style="position:absolute;left:18%;bottom:65.56%;"></img><img value="Rengar" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Rengar.png" title="0.92%, 45.65%" style="position:absolute;left:30.67%;bottom:46.74%;"></img><img value="Varus" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Varus.png" title="0.85%, 47.06%" style="position:absolute;left:28.33%;bottom:49.41%;"></img><img value="Nautilus" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nautilus.png" title="1.63%, 54.6%" style="position:absolute;left:54.33%;bottom:63.74%;"></img><img value="Viktor" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Viktor.png" title="1.41%, 49.65%" style="position:absolute;left:47%;bottom:54.33%;"></img><img value="Sejuani" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Sejuani.png" title="0.3%, 66.67%" style="position:absolute;left:10%;bottom:86.67%;"></img><img value="Fiora" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Fiora.png" title="0.71%, 49.3%" style="position:absolute;left:23.67%;bottom:53.66%;"></img><img value="Ziggs" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ziggs.png" title="0.5%, 52%" style="position:absolute;left:16.67%;bottom:58.8%;"></img><img value="Lulu" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Lulu.png" title="0.6%, 53.33%" style="position:absolute;left:20%;bottom:61.33%;"></img><img value="Draven" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Draven.png" title="0.65%, 52.31%" style="position:absolute;left:21.67%;bottom:59.38%;"></img><img value="Hecarim" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Hecarim.png" title="0.49%, 32.65%" style="position:absolute;left:16.33%;bottom:22.04%;"></img><img value="Khazix" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Khazix.png" title="0.52%, 44.23%" style="position:absolute;left:17.33%;bottom:44.04%;"></img><img value="Darius" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Darius.png" title="1.56%, 51.92%" style="position:absolute;left:52%;bottom:58.65%;"></img><img value="Jayce" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Jayce.png" title="0.47%, 48.94%" style="position:absolute;left:15.67%;bottom:52.98%;"></img><img value="Lissandra" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Lissandra.png" title="0.18%, 33.33%" style="position:absolute;left:6%;bottom:23.33%;"></img><img value="Diana" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Diana.png" title="1.44%, 47.92%" style="position:absolute;left:48%;bottom:51.04%;"></img><img value="Quinn" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Quinn.png" title="1%, 41%" style="position:absolute;left:33.33%;bottom:37.9%;"></img><img value="Syndra" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Syndra.png" title="0.23%, 52.17%" style="position:absolute;left:7.67%;bottom:59.13%;"></img><img value="Zyra" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Zyra.png" title="0.31%, 61.29%" style="position:absolute;left:10.33%;bottom:76.45%;"></img><img value="Gnar" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Gnar.png" title="0.89%, 44.94%" style="position:absolute;left:29.67%;bottom:45.39%;"></img><img value="Zac" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Zac.png" title="0.24%, 45.83%" style="position:absolute;left:8%;bottom:47.08%;"></img><img value="Yasuo" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Yasuo.png" title="1.51%, 47.68%" style="position:absolute;left:50.33%;bottom:50.6%;"></img><img value="Velkoz" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Velkoz.png" title="0.65%, 41.54%" style="position:absolute;left:21.67%;bottom:38.92%;"></img><img value="Braum" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Braum.png" title="0.69%, 56.52%" style="position:absolute;left:23%;bottom:67.39%;"></img><img value="Jinx" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Jinx.png" title="2.38%, 48.74%" style="position:absolute;left:79.33%;bottom:52.61%;"></img><img value="TahmKench" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/TahmKench.png" title="2.18%, 40.37%" style="position:absolute;left:72.67%;bottom:36.7%;"></img><img value="Lucian" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Lucian.png" title="0.48%, 37.5%" style="position:absolute;left:16%;bottom:31.25%;"></img><img value="Zed" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Zed.png" title="0.73%, 58.9%" style="position:absolute;left:24.33%;bottom:71.92%;"></img><img value="Ekko" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ekko.png" title="1.14%, 47.37%" style="position:absolute;left:38%;bottom:50%;"></img><img value="Vi" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Vi.png" title="0.8%, 46.25%" style="position:absolute;left:26.67%;bottom:47.88%;"></img><img value="Aatrox" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Aatrox.png" title="0.82%, 51.22%" style="position:absolute;left:27.33%;bottom:57.32%;"></img><img value="Nami" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nami.png" title="1.06%, 46.23%" style="position:absolute;left:35.33%;bottom:47.83%;"></img><img value="Azir" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Azir.png" title="0.45%, 51.11%" style="position:absolute;left:15%;bottom:57.11%;"></img><img value="Thresh" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Thresh.png" title="1.87%, 53.48%" style="position:absolute;left:62.33%;bottom:61.6%;"></img><img value="RekSai" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/RekSai.png" title="0.49%, 44.9%" style="position:absolute;left:16.33%;bottom:45.31%;"></img><img value="Kalista" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Kalista.png" title="0.68%, 51.47%" style="position:absolute;left:22.67%;bottom:57.79%;"></img><img value="Bard" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Bard.png" title="1.02%, 46.08%" style="position:absolute;left:34%;bottom:47.55%;"></img>					<span style="position:absolute;left:100%;bottom:0px;transform:translate(-100%, 100%);font-variant:small-caps;"  >3%</span>
					<span style="position:absolute;left:50%;bottom:0px;transform:translate(-50%, 100%);font-variant:small-caps;" >pick rate</span>
					<span style="position:absolute;left:0%;bottom:0px;transform:translate(0%, 100%);font-variant:small-caps;">0%</span>
				</div>

				<div class="razorfinitems" style="display:none;width:100%;height:100%;overflow-y:auto;overflow-x:hidden;text-align:left;">
					<div class="item" value="Infinity Edge" title="0.0505%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3031.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3031.png"></div><div class="item" value="Doran's Blade" title="0.0469%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1055.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1055.png"></div><div class="item" value="Berserker's Greaves" title="0.0453%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3006.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3006.png"></div><div class="item" value="Blade of the Ruined King" title="0.0438%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3153.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3153.png"></div><div class="item" value="Sorcerer's Shoes" title="0.041%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3020.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3020.png"></div><div class="item" value="Doran's Ring" title="0.0354%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1056.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1056.png"></div><div class="item" value="Sightstone" title="0.0295%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2049.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2049.png"></div><div class="item" value="Statikk Shiv" title="0.0289%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3087.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3087.png"></div><div class="item" value="Rabadon's Deathcap" title="0.0273%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3089.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3089.png"></div><div class="item" value="Boots of Speed" title="0.0267%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1001.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1001.png"></div><div class="item" value="Health Potion" title="0.0259%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2003.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2003.png"></div><div class="item" value="Ravenous Hydra (Melee Only)" title="0.0251%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3074.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3074.png"></div><div class="item" value="Luden's Echo" title="0.025%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3285.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3285.png"></div><div class="item" value="Needlessly Large Rod" title="0.0249%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1058.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1058.png"></div><div class="item" value="The Bloodthirster" title="0.0241%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3072.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3072.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0239%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1304.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1304.png"></div><div class="item" value="Last Whisper" title="0.0237%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3035.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3035.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0234%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1314.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1314.png"></div><div class="item" value="Typhoon Claws" title="0.0234%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3652.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3652.png"></div><div class="item" value="Amplifying Tome" title="0.023%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1052.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1052.png"></div><div class="item" value="Zhonya's Hourglass" title="0.0228%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3157.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3157.png"></div><div class="item" value="Vampiric Scepter" title="0.0226%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1053.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1053.png"></div><div class="item" value="Boots of Mobility" title="0.0208%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3117.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3117.png"></div><div class="item" value="Flesheater (Melee Only)" title="0.0208%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3924.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3924.png"></div><div class="item" value="Pickaxe" title="0.0207%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1037.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1037.png"></div><div class="item" value="Trinity Force" title="0.0203%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3078.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3078.png"></div><div class="item" value="Mercury's Treads" title="0.0202%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3111.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3111.png"></div><div class="item" value="Mirage Blade" title="0.0191%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3150.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3150.png"></div><div class="item" value="B. F. Sword" title="0.0181%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1038.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1038.png"></div><div class="item" value="Blasting Wand" title="0.0181%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1026.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1026.png"></div><div class="item" value="Spirit Visage" title="0.0178%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3065.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3065.png"></div><div class="item" value="Randuin's Omen" title="0.0175%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3143.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3143.png"></div><div class="item" value="Dead Man's Plate" title="0.0168%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3742.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3742.png"></div><div class="item" value="Phantom Dancer" title="0.016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3046.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3046.png"></div><div class="item" value="Ruby Crystal" title="0.0156%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1028.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1028.png"></div><div class="item" value="Rod of Ages" title="0.0154%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3027.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3027.png"></div><div class="item" value="Trickster's Glass" title="0.0151%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3829.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3829.png"></div><div class="item" value="Giant's Belt" title="0.0144%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1011.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1011.png"></div><div class="item" value="Netherstride Grimoire" title="0.0142%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3431.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3431.png"></div><div class="item" value="The Black Cleaver" title="0.0137%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3071.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3071.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0136%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1324.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1324.png"></div><div class="item" value="Sunfire Cape" title="0.0132%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3068.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3068.png"></div><div class="item" value="Pox Arcana" title="0.0131%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3434.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3434.png"></div><div class="item" value="Ninja Tabi" title="0.0127%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3047.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3047.png"></div><div class="item" value="Long Sword" title="0.0127%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1036.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1036.png"></div><div class="item" value="Dagger" title="0.0126%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1042.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1042.png"></div><div class="item" value="Lich Bane" title="0.0121%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3100.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3100.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0121%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1329.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1329.png"></div><div class="item" value="Liandry's Torment" title="0.0116%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3151.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3151.png"></div><div class="item" value="Frozen Heart" title="0.0115%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3110.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3110.png"></div><div class="item" value="Ionian Boots of Lucidity" title="0.0112%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3158.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3158.png"></div><div class="item" value="Youmuu's Ghostblade" title="0.0111%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3142.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3142.png"></div><div class="item" value="Rylai's Crystal Scepter" title="0.0104%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3116.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3116.png"></div><div class="item" value="Rite of Ruin" title="0.0102%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3430.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3430.png"></div><div class="item" value="Zeal" title="0.0101%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3086.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3086.png"></div><div class="item" value="Chain Vest" title="0.0097%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1031.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1031.png"></div><div class="item" value="Spectre's Cowl" title="0.0094%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3211.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3211.png"></div><div class="item" value="Cloth Armor" title="0.0094%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1029.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1029.png"></div><div class="item" value="Void Staff" title="0.0093%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3135.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3135.png"></div><div class="item" value="Nashor's Tooth" title="0.0092%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3115.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3115.png"></div><div class="item" value="Crystalline Flask" title="0.009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2041.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2041.png"></div><div class="item" value="Athene's Unholy Grail" title="0.0086%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3174.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3174.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0084%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1319.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1319.png"></div><div class="item" value="Aether Wisp" title="0.0083%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3113.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3113.png"></div><div class="item" value="Enchantment: Warrior" title="0.0082%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3707.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3707.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0081%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3930.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3930.png"></div><div class="item" value="Kindlegem" title="0.0081%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3067.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3067.png"></div><div class="item" value="Thornmail" title="0.008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3075.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3075.png"></div><div class="item" value="Talisman of Ascension" title="0.0079%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3069.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3069.png"></div><div class="item" value="Cloak of Agility" title="0.0079%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1018.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1018.png"></div><div class="item" value="Lost Chapter" title="0.0077%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3433.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3433.png"></div><div class="item" value="Runaan's Hurricane (Ranged Only)" title="0.0077%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3085.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3085.png"></div><div class="item" value="Mana Potion" title="0.0075%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2004.png"></div><div class="item" value="The Brutalizer" title="0.0071%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3134.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3134.png"></div><div class="item" value="Bilgewater Cutlass" title="0.0071%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3144.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3144.png"></div><div class="item" value="Face of the Mountain" title="0.007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3401.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3401.png"></div><div class="item" value="Null-Magic Mantle" title="0.007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1033.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1033.png"></div><div class="item" value="Warden's Mail" title="0.0069%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3082.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3082.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0069%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3931.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3931.png"></div><div class="item" value="Seeker's Armguard" title="0.0066%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3191.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3191.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0066%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1334.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1334.png"></div><div class="item" value="Abyssal Scepter" title="0.0064%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3001.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3001.png"></div><div class="item" value="Phage" title="0.0063%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3044.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3044.png"></div><div class="item" value="Ruby Sightstone" title="0.0063%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2045.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2045.png"></div><div class="item" value="Total Biscuit of Rejuvenation" title="0.0063%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2010.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2010.png"></div><div class="item" value="Fiendish Codex" title="0.0061%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3108.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3108.png"></div><div class="item" value="Banshee's Veil" title="0.0061%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3102.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3102.png"></div><div class="item" value="Martyr's Gambit" title="0.0061%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3911.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3911.png"></div><div class="item" value="Globe of Trust" title="0.0059%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3840.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3840.png"></div><div class="item" value="Sheen" title="0.0058%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3057.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3057.png"></div><div class="item" value="Frost Queen's Claim" title="0.0056%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3092.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3092.png"></div><div class="item" value="Doran's Shield" title="0.0055%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1054.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1054.png"></div><div class="item" value="Warmog's Armor" title="0.0054%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3083.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3083.png"></div><div class="item" value="Recurve Bow" title="0.0054%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1043.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1043.png"></div><div class="item" value="Locket of the Iron Solari" title="0.0053%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3190.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3190.png"></div><div class="item" value="Avarice Blade" title="0.0052%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3093.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3093.png"></div><div class="item" value="Boots of Swiftness" title="0.005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3009.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3009.png"></div><div class="item" value="Iceborn Gauntlet" title="0.005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3025.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3025.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0049%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3724.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3724.png"></div><div class="item" value="Vision Ward" title="0.0047%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2043.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2043.png"></div><div class="item" value="Staff of Flowing Water" title="0.0045%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3744.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3744.png"></div><div class="item" value="Puppeteer" title="0.0044%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3745.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3745.png"></div><div class="item" value="Crystalline Bracer" title="0.0044%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3801.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3801.png"></div><div class="item" value="Wit's End" title="0.0043%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3091.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3091.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0042%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3709.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3709.png"></div><div class="item" value="Righteous Glory" title="0.0041%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3800.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3800.png"></div><div class="item" value="Maw of Malmortius" title="0.004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3156.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3156.png"></div><div class="item" value="Tear of the Goddess" title="0.004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3070.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3070.png"></div><div class="item" value="Negatron Cloak" title="0.004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1057.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1057.png"></div><div class="item" value="Seraph's Embrace" title="0.004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3040.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3040.png"></div><div class="item" value="Guardian Angel" title="0.0038%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3026.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3026.png"></div><div class="item" value="Haunting Guise" title="0.0038%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3136.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3136.png"></div><div class="item" value="Enchantment: Furor" title="0.0038%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1300.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1300.png"></div><div class="item" value="Stealth Ward" title="0.0037%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2044.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2044.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0037%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3933.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3933.png"></div><div class="item" value="Enchantment: Devourer" title="0.0036%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3710.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3710.png"></div><div class="item" value="Spellthief's Edge" title="0.0036%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3303.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3303.png"></div><div class="item" value="Glacial Shroud" title="0.0036%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3024.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3024.png"></div><div class="item" value="Targon's Brace" title="0.0034%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3097.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3097.png"></div><div class="item" value="Hexdrinker" title="0.0033%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3155.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3155.png"></div><div class="item" value="Manamune" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3004.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0029%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3708.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3708.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0029%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3725.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3725.png"></div><div class="item" value="Tiamat (Melee Only)" title="0.0028%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3077.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3077.png"></div><div class="item" value="Muramana" title="0.0028%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3042.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3042.png"></div><div class="item" value="Brawler's Gloves" title="0.0027%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1051.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1051.png"></div><div class="item" value="Frostfang" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3098.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3098.png"></div><div class="item" value="Enchantment: Warrior" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3723.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3723.png"></div><div class="item" value="Bami's Cinder" title="0.0025%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3751.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3751.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0025%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1311.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1311.png"></div><div class="item" value="Chalice of Harmony" title="0.0024%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3028.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3028.png"></div><div class="item" value="Perfect Hex Core" title="0.0024%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3198.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3198.png"></div><div class="item" value="Frozen Mallet" title="0.0023%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3022.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3022.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0023%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1306.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1306.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0023%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1301.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1301.png"></div><div class="item" value="Hextech Gunblade" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3146.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3146.png"></div><div class="item" value="Enchantment: Homeguard" title="0.002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1309.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1309.png"></div><div class="item" value="Will of the Ancients" title="0.002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3152.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3152.png"></div><div class="item" value="Relic Shield" title="0.002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3302.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3302.png"></div><div class="item" value="Stinger" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3101.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3101.png"></div><div class="item" value="Rejuvenation Bead" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1006.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1006.png"></div><div class="item" value="Swindler's Orb" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3841.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3841.png"></div><div class="item" value="Catalyst the Protector" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3010.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3010.png"></div><div class="item" value="Zephyr" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3172.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3172.png"></div><div class="item" value="Enchantment: Devourer" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3726.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3726.png"></div><div class="item" value="Forbidden Idol" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3114.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3114.png"></div><div class="item" value="Ancient Coin" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3301.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3301.png"></div><div class="item" value="Zz'Rot Portal" title="0.0017%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3512.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3512.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0017%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3717.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3717.png"></div><div class="item" value="Aegis of the Legion" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3105.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3105.png"></div><div class="item" value="Nomad's Medallion" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3096.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3096.png"></div><div class="item" value="Quicksilver Sash" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3140.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3140.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0015%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1321.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1321.png"></div><div class="item" value="Mejai's Soulstealer" title="0.0015%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3041.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3041.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0015%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1326.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1326.png"></div><div class="item" value="Ardent Censer" title="0.0014%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3504.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3504.png"></div><div class="item" value="Archangel's Staff" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3003.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3003.png"></div><div class="item" value="Enchantment: Warrior" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3714.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3714.png"></div><div class="item" value="The Hex Core mk-2" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3197.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3197.png"></div><div class="item" value="Enchantment: Devourer" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3718.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3718.png"></div><div class="item" value="Essence Reaver" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3508.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3508.png"></div><div class="item" value="Zeke's Harbinger" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3050.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3050.png"></div><div class="item" value="Stalker's Blade" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3706.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3706.png"></div><div class="item" value="Twin Shadows" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3023.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3023.png"></div><div class="item" value="Sapphire Crystal" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1027.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1027.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3716.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3716.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3721.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3721.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3932.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3932.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1316.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1316.png"></div><div class="item" value="Faerie Charm" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1004.png"></div><div class="item" value="Murksphere" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3844.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3844.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1331.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1331.png"></div><div class="item" value="Mercurial Scimitar" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3139.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3139.png"></div><div class="item" value="Enchantment: Devourer" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3722.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3722.png"></div><div class="item" value="Hextech Revolver" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3145.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3145.png"></div><div class="item" value="Mikael's Crucible" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3222.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3222.png"></div><div class="item" value="Raptor Cloak" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2053.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2053.png"></div><div class="item" value="The Hex Core mk-1" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3196.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3196.png"></div><div class="item" value="Sword of the Occult" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3141.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3141.png"></div><div class="item" value="Banner of Command" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3060.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3060.png"></div><div class="item" value="Enchantment: Furor" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1315.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1315.png"></div><div class="item" value="Skirmisher's Sabre" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3715.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3715.png"></div><div class="item" value="Enchantment: Furor" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1310.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1310.png"></div><div class="item" value="Ranger's Trailblazer" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3713.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3713.png"></div><div class="item" value="Enchantment: Furor" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1305.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1305.png"></div><div class="item" value="Enchantment: Furor" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1320.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1320.png"></div><div class="item" value="Enchantment: Distortion" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1313.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1313.png"></div><div class="item" value="Guinsoo's Rageblade" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3124.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3124.png"></div><div class="item" value="Enchantment: Furor" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1330.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1330.png"></div><div class="item" value="Enchantment: Distortion" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1333.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1333.png"></div><div class="item" value="Enchantment: Distortion" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1323.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1323.png"></div><div class="item" value="Enchantment: Captain" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1327.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1327.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3720.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3720.png"></div><div class="item" value="Enchantment: Distortion" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1308.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1308.png"></div><div class="item" value="Enchantment: Captain" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1312.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1312.png"></div><div class="item" value="Hunter's Machete" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1039.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1039.png"></div><div class="item" value="Enchantment: Distortion" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1318.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1318.png"></div><div class="item" value="Elixir of Wrath" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2140.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2140.png"></div><div class="item" value="Ohmwrecker" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3056.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3056.png"></div><div class="item" value="Enchantment: Distortion" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1303.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1303.png"></div><div class="item" value="Poacher's Knife" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3711.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3711.png"></div><div class="item" value="Enchantment: Warrior" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3719.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3719.png"></div><div class="item" value="Enchantment: Captain" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1317.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1317.png"></div><div class="item" value="Enchantment: Captain" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1302.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1302.png"></div><div class="item" value="Enchantment: Furor" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1325.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1325.png"></div><div class="item" value="Enchantment: Distortion" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1328.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1328.png"></div>				</div>

				<div class="ironbackitems" style="display:none;width:100%;height:100%;overflow-y:auto;overflow-x:hidden;text-align:left;">
					<div class="item" value="Infinity Edge" title="0.0485%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3031.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3031.png"></div><div class="item" value="Doran's Blade" title="0.0429%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1055.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1055.png"></div><div class="item" value="Berserker's Greaves" title="0.0423%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3006.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3006.png"></div><div class="item" value="Blade of the Ruined King" title="0.0422%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3153.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3153.png"></div><div class="item" value="Sightstone" title="0.0405%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2049.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2049.png"></div><div class="item" value="Sorcerer's Shoes" title="0.0395%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3020.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3020.png"></div><div class="item" value="Doran's Ring" title="0.0329%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1056.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1056.png"></div><div class="item" value="Rabadon's Deathcap" title="0.0288%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3089.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3089.png"></div><div class="item" value="Boots of Mobility" title="0.0275%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3117.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3117.png"></div><div class="item" value="Boots of Speed" title="0.027%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1001.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1001.png"></div><div class="item" value="Mercury's Treads" title="0.0267%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3111.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3111.png"></div><div class="item" value="Luden's Echo" title="0.0262%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3285.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3285.png"></div><div class="item" value="Health Potion" title="0.0258%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2003.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2003.png"></div><div class="item" value="Ravenous Hydra (Melee Only)" title="0.0255%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3074.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3074.png"></div><div class="item" value="Dead Man's Plate" title="0.0255%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3742.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3742.png"></div><div class="item" value="Statikk Shiv" title="0.0253%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3087.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3087.png"></div><div class="item" value="The Bloodthirster" title="0.0239%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3072.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3072.png"></div><div class="item" value="Spirit Visage" title="0.0236%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3065.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3065.png"></div><div class="item" value="Zhonya's Hourglass" title="0.0235%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3157.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3157.png"></div><div class="item" value="Randuin's Omen" title="0.0233%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3143.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3143.png"></div><div class="item" value="Last Whisper" title="0.0226%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3035.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3035.png"></div><div class="item" value="Needlessly Large Rod" title="0.0225%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1058.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1058.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0224%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1314.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1314.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0219%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1304.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1304.png"></div><div class="item" value="Amplifying Tome" title="0.0215%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1052.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1052.png"></div><div class="item" value="Typhoon Claws" title="0.0212%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3652.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3652.png"></div><div class="item" value="Trinity Force" title="0.0192%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3078.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3078.png"></div><div class="item" value="Ruby Crystal" title="0.0188%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1028.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1028.png"></div><div class="item" value="Vampiric Scepter" title="0.0188%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1053.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1053.png"></div><div class="item" value="Sunfire Cape" title="0.0186%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3068.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3068.png"></div><div class="item" value="Flesheater (Melee Only)" title="0.0185%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3924.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3924.png"></div><div class="item" value="Pickaxe" title="0.0184%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1037.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1037.png"></div><div class="item" value="Frozen Heart" title="0.0183%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3110.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3110.png"></div><div class="item" value="Giant's Belt" title="0.0182%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1011.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1011.png"></div><div class="item" value="Phantom Dancer" title="0.018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3046.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3046.png"></div><div class="item" value="The Black Cleaver" title="0.0168%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3071.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3071.png"></div><div class="item" value="Trickster's Glass" title="0.0167%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3829.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3829.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0166%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1329.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1329.png"></div><div class="item" value="Blasting Wand" title="0.0164%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1026.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1026.png"></div><div class="item" value="Enchantment: Homeguard" title="0.016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1324.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1324.png"></div><div class="item" value="Rod of Ages" title="0.0153%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3027.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3027.png"></div><div class="item" value="Ninja Tabi" title="0.015%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3047.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3047.png"></div><div class="item" value="Mirage Blade" title="0.0146%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3150.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3150.png"></div><div class="item" value="Face of the Mountain" title="0.014%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3401.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3401.png"></div><div class="item" value="Chain Vest" title="0.0137%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1031.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1031.png"></div><div class="item" value="Cloth Armor" title="0.0136%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1029.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1029.png"></div><div class="item" value="B. F. Sword" title="0.0136%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1038.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1038.png"></div><div class="item" value="Netherstride Grimoire" title="0.0124%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3431.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3431.png"></div><div class="item" value="Rylai's Crystal Scepter" title="0.0123%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3116.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3116.png"></div><div class="item" value="Ionian Boots of Lucidity" title="0.0118%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3158.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3158.png"></div><div class="item" value="Long Sword" title="0.0118%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1036.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1036.png"></div><div class="item" value="Crystalline Flask" title="0.0116%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2041.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2041.png"></div><div class="item" value="Lich Bane" title="0.0109%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3100.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3100.png"></div><div class="item" value="Pox Arcana" title="0.0108%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3434.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3434.png"></div><div class="item" value="Martyr's Gambit" title="0.0107%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3911.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3911.png"></div><div class="item" value="Void Staff" title="0.0105%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3135.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3135.png"></div><div class="item" value="Spectre's Cowl" title="0.0104%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3211.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3211.png"></div><div class="item" value="Warden's Mail" title="0.0104%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3082.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3082.png"></div><div class="item" value="Enchantment: Warrior" title="0.0104%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3707.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3707.png"></div><div class="item" value="Liandry's Torment" title="0.0102%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3151.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3151.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0101%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3930.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3930.png"></div><div class="item" value="Kindlegem" title="0.0094%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3067.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3067.png"></div><div class="item" value="Rite of Ruin" title="0.0089%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3430.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3430.png"></div><div class="item" value="Thornmail" title="0.0088%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3075.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3075.png"></div><div class="item" value="Banshee's Veil" title="0.0087%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3102.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3102.png"></div><div class="item" value="Warmog's Armor" title="0.0087%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3083.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3083.png"></div><div class="item" value="Dagger" title="0.0087%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1042.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1042.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0087%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1319.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1319.png"></div><div class="item" value="Ruby Sightstone" title="0.0086%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2045.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2045.png"></div><div class="item" value="Youmuu's Ghostblade" title="0.0086%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3142.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3142.png"></div><div class="item" value="Athene's Unholy Grail" title="0.0085%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3174.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3174.png"></div><div class="item" value="Doran's Shield" title="0.0084%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1054.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1054.png"></div><div class="item" value="Talisman of Ascension" title="0.0078%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3069.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3069.png"></div><div class="item" value="Abyssal Scepter" title="0.0077%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3001.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3001.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0073%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3725.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3725.png"></div><div class="item" value="Locket of the Iron Solari" title="0.0073%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3190.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3190.png"></div><div class="item" value="Mana Potion" title="0.0073%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2004.png"></div><div class="item" value="Zeal" title="0.0072%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3086.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3086.png"></div><div class="item" value="Null-Magic Mantle" title="0.007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1033.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1033.png"></div><div class="item" value="Phage" title="0.007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3044.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3044.png"></div><div class="item" value="Globe of Trust" title="0.0068%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3840.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3840.png"></div><div class="item" value="Boots of Swiftness" title="0.0064%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3009.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3009.png"></div><div class="item" value="Righteous Glory" title="0.0064%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3800.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3800.png"></div><div class="item" value="Nashor's Tooth" title="0.0062%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3115.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3115.png"></div><div class="item" value="Sheen" title="0.0062%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3057.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3057.png"></div><div class="item" value="Total Biscuit of Rejuvenation" title="0.0062%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2010.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2010.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0062%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1334.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1334.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0061%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3724.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3724.png"></div><div class="item" value="Lost Chapter" title="0.006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3433.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3433.png"></div><div class="item" value="Aether Wisp" title="0.006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3113.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3113.png"></div><div class="item" value="The Brutalizer" title="0.006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3134.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3134.png"></div><div class="item" value="Bilgewater Cutlass" title="0.0058%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3144.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3144.png"></div><div class="item" value="Runaan's Hurricane (Ranged Only)" title="0.0058%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3085.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3085.png"></div><div class="item" value="Staff of Flowing Water" title="0.0057%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3744.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3744.png"></div><div class="item" value="Frost Queen's Claim" title="0.0056%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3092.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3092.png"></div><div class="item" value="Crystalline Bracer" title="0.0055%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3801.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3801.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0055%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3931.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3931.png"></div><div class="item" value="Seeker's Armguard" title="0.0054%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3191.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3191.png"></div><div class="item" value="Iceborn Gauntlet" title="0.0054%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3025.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3025.png"></div><div class="item" value="Vision Ward" title="0.0054%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2043.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2043.png"></div><div class="item" value="Maw of Malmortius" title="0.0053%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3156.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3156.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0051%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3709.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3709.png"></div><div class="item" value="Cloak of Agility" title="0.005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1018.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1018.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0049%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3933.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3933.png"></div><div class="item" value="Fiendish Codex" title="0.0045%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3108.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3108.png"></div><div class="item" value="Targon's Brace" title="0.0045%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3097.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3097.png"></div><div class="item" value="Guardian Angel" title="0.0045%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3026.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3026.png"></div><div class="item" value="Glacial Shroud" title="0.0045%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3024.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3024.png"></div><div class="item" value="Will of the Ancients" title="0.0044%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3152.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3152.png"></div><div class="item" value="Puppeteer" title="0.0044%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3745.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3745.png"></div><div class="item" value="Recurve Bow" title="0.0043%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1043.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1043.png"></div><div class="item" value="Haunting Guise" title="0.0043%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3136.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3136.png"></div><div class="item" value="Bami's Cinder" title="0.0039%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3751.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3751.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0039%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3708.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3708.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0036%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1309.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1309.png"></div><div class="item" value="Wit's End" title="0.0036%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3091.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3091.png"></div><div class="item" value="Forbidden Idol" title="0.0035%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3114.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3114.png"></div><div class="item" value="Tiamat (Melee Only)" title="0.0035%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3077.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3077.png"></div><div class="item" value="Chalice of Harmony" title="0.0035%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3028.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3028.png"></div><div class="item" value="Relic Shield" title="0.0034%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3302.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3302.png"></div><div class="item" value="Enchantment: Devourer" title="0.0034%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3710.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3710.png"></div><div class="item" value="Avarice Blade" title="0.0033%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3093.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3093.png"></div><div class="item" value="Perfect Hex Core" title="0.0032%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3198.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3198.png"></div><div class="item" value="Hextech Gunblade" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3146.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3146.png"></div><div class="item" value="Stealth Ward" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2044.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2044.png"></div><div class="item" value="Tear of the Goddess" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3070.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3070.png"></div><div class="item" value="Seraph's Embrace" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3040.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3040.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3717.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3717.png"></div><div class="item" value="Negatron Cloak" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1057.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1057.png"></div><div class="item" value="Nomad's Medallion" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3096.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3096.png"></div><div class="item" value="Frostfang" title="0.0028%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3098.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3098.png"></div><div class="item" value="Enchantment: Furor" title="0.0028%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1300.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1300.png"></div><div class="item" value="Spellthief's Edge" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3303.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3303.png"></div><div class="item" value="Enchantment: Devourer" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3718.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3718.png"></div><div class="item" value="Sapphire Crystal" title="0.0025%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1027.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1027.png"></div><div class="item" value="Frozen Mallet" title="0.0025%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3022.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3022.png"></div><div class="item" value="Swindler's Orb" title="0.0024%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3841.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3841.png"></div><div class="item" value="Muramana" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3042.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3042.png"></div><div class="item" value="Ancient Coin" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3301.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3301.png"></div><div class="item" value="Rejuvenation Bead" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1006.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1006.png"></div><div class="item" value="Hexdrinker" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3155.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3155.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1311.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1311.png"></div><div class="item" value="Enchantment: Alacrity" title="0.002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1301.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1301.png"></div><div class="item" value="Catalyst the Protector" title="0.002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3010.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3010.png"></div><div class="item" value="Enchantment: Devourer" title="0.002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3726.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3726.png"></div><div class="item" value="Mercurial Scimitar" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3139.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3139.png"></div><div class="item" value="Zephyr" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3172.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3172.png"></div><div class="item" value="Aegis of the Legion" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3105.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3105.png"></div><div class="item" value="Manamune" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3004.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1321.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1321.png"></div><div class="item" value="Ardent Censer" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3504.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3504.png"></div><div class="item" value="Brawler's Gloves" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1051.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1051.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1326.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1326.png"></div><div class="item" value="Mikael's Crucible" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3222.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3222.png"></div><div class="item" value="Stalker's Blade" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3706.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3706.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1306.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1306.png"></div><div class="item" value="Quicksilver Sash" title="0.0015%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3140.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3140.png"></div><div class="item" value="Enchantment: Warrior" title="0.0015%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3723.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3723.png"></div><div class="item" value="Faerie Charm" title="0.0014%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1004.png"></div><div class="item" value="Banner of Command" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3060.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3060.png"></div><div class="item" value="Zeke's Harbinger" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3050.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3050.png"></div><div class="item" value="Essence Reaver" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3508.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3508.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3716.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3716.png"></div><div class="item" value="Mejai's Soulstealer" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3041.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3041.png"></div><div class="item" value="Enchantment: Warrior" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3714.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3714.png"></div><div class="item" value="Ranger's Trailblazer" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3713.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3713.png"></div><div class="item" value="Zz'Rot Portal" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3512.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3512.png"></div><div class="item" value="Archangel's Staff" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3003.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3003.png"></div><div class="item" value="Murksphere" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3844.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3844.png"></div><div class="item" value="Hextech Revolver" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3145.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3145.png"></div><div class="item" value="Stinger" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3101.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3101.png"></div><div class="item" value="The Hex Core mk-2" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3197.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3197.png"></div><div class="item" value="Enchantment: Devourer" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3722.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3722.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1316.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1316.png"></div><div class="item" value="Twin Shadows" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3023.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3023.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3932.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3932.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1331.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1331.png"></div><div class="item" value="Enchantment: Captain" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1327.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1327.png"></div><div class="item" value="The Hex Core mk-1" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3196.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3196.png"></div><div class="item" value="Enchantment: Distortion" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1313.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1313.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3721.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3721.png"></div><div class="item" value="Enchantment: Furor" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1310.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1310.png"></div><div class="item" value="Ohmwrecker" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3056.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3056.png"></div><div class="item" value="Enchantment: Furor" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1325.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1325.png"></div><div class="item" value="Guinsoo's Rageblade" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3124.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3124.png"></div><div class="item" value="Enchantment: Furor" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1320.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1320.png"></div><div class="item" value="Enchantment: Captain" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1322.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1322.png"></div><div class="item" value="Enchantment: Distortion" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1323.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1323.png"></div><div class="item" value="Hunter's Machete" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1039.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1039.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3720.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3720.png"></div><div class="item" value="Raptor Cloak" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2053.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2053.png"></div><div class="item" value="Elixir of Wrath" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2140.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2140.png"></div><div class="item" value="Elixir of Sorcery" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2139.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2139.png"></div><div class="item" value="Enchantment: Furor" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1330.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1330.png"></div><div class="item" value="Enchantment: Distortion" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1328.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1328.png"></div><div class="item" value="Enchantment: Warrior" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3719.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3719.png"></div><div class="item" value="Enchantment: Distortion" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1333.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1333.png"></div><div class="item" value="Sword of the Occult" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3141.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3141.png"></div><div class="item" value="Enchantment: Furor" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1315.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1315.png"></div><div class="item" value="Enchantment: Captain" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1317.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1317.png"></div><div class="item" value="Enchantment: Captain" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1312.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1312.png"></div><div class="item" value="Enchantment: Distortion" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1308.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1308.png"></div><div class="item" value="Enchantment: Captain" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1302.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1302.png"></div><div class="item" value="Enchantment: Distortion" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1303.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1303.png"></div><div class="item" value="Poacher's Knife" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3711.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3711.png"></div>				</div>

				<div class="plundercrabitems" style="display:none;width:100%;height:100%;overflow-y:auto;overflow-x:hidden;text-align:left;">
					<div class="item" value="Infinity Edge" title="0.0372%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3031.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3031.png"></div><div class="item" value="Berserker's Greaves" title="0.0351%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3006.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3006.png"></div><div class="item" value="Doran's Blade" title="0.0322%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1055.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1055.png"></div><div class="item" value="Sorcerer's Shoes" title="0.0319%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3020.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3020.png"></div><div class="item" value="Blade of the Ruined King" title="0.0275%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3153.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3153.png"></div><div class="item" value="Doran's Ring" title="0.0252%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1056.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1056.png"></div><div class="item" value="Sightstone" title="0.0215%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2049.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2049.png"></div><div class="item" value="Rabadon's Deathcap" title="0.0212%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3089.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3089.png"></div><div class="item" value="Zhonya's Hourglass" title="0.0195%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3157.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3157.png"></div><div class="item" value="Amplifying Tome" title="0.0193%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1052.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1052.png"></div><div class="item" value="Statikk Shiv" title="0.0188%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3087.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3087.png"></div><div class="item" value="Luden's Echo" title="0.0181%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3285.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3285.png"></div><div class="item" value="Health Potion" title="0.0176%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2003.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2003.png"></div><div class="item" value="Typhoon Claws" title="0.0175%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3652.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3652.png"></div><div class="item" value="Boots of Speed" title="0.0175%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1001.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1001.png"></div><div class="item" value="Ravenous Hydra (Melee Only)" title="0.0173%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3074.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3074.png"></div><div class="item" value="Last Whisper" title="0.0169%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3035.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3035.png"></div><div class="item" value="Needlessly Large Rod" title="0.0166%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1058.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1058.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0155%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1314.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1314.png"></div><div class="item" value="Flesheater (Melee Only)" title="0.0151%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3924.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3924.png"></div><div class="item" value="Pickaxe" title="0.0147%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1037.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1037.png"></div><div class="item" value="Boots of Mobility" title="0.0147%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3117.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3117.png"></div><div class="item" value="Mercury's Treads" title="0.0147%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3111.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3111.png"></div><div class="item" value="Mirage Blade" title="0.0145%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3150.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3150.png"></div><div class="item" value="The Bloodthirster" title="0.0141%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3072.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3072.png"></div><div class="item" value="Vampiric Scepter" title="0.0138%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1053.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1053.png"></div><div class="item" value="Phantom Dancer" title="0.0135%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3046.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3046.png"></div><div class="item" value="Spirit Visage" title="0.0134%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3065.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3065.png"></div><div class="item" value="Blasting Wand" title="0.0132%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1026.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1026.png"></div><div class="item" value="Dead Man's Plate" title="0.0128%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3742.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3742.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0128%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1304.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1304.png"></div><div class="item" value="Trickster's Glass" title="0.012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3829.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3829.png"></div><div class="item" value="Trinity Force" title="0.0118%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3078.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3078.png"></div><div class="item" value="B. F. Sword" title="0.0114%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1038.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1038.png"></div><div class="item" value="Randuin's Omen" title="0.0113%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3143.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3143.png"></div><div class="item" value="The Black Cleaver" title="0.0112%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3071.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3071.png"></div><div class="item" value="Frozen Heart" title="0.0107%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3110.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3110.png"></div><div class="item" value="Pox Arcana" title="0.0107%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3434.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3434.png"></div><div class="item" value="Ruby Crystal" title="0.0105%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1028.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1028.png"></div><div class="item" value="Lich Bane" title="0.0103%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3100.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3100.png"></div><div class="item" value="Netherstride Grimoire" title="0.0102%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3431.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3431.png"></div><div class="item" value="Rod of Ages" title="0.0097%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3027.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3027.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0095%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1329.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1329.png"></div><div class="item" value="Long Sword" title="0.0093%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1036.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1036.png"></div><div class="item" value="Ninja Tabi" title="0.0093%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3047.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3047.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0088%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1324.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1324.png"></div><div class="item" value="Liandry's Torment" title="0.0087%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3151.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3151.png"></div><div class="item" value="Rylai's Crystal Scepter" title="0.0085%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3116.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3116.png"></div><div class="item" value="Crystalline Flask" title="0.0084%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2041.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2041.png"></div><div class="item" value="Giant's Belt" title="0.0083%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1011.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1011.png"></div><div class="item" value="Sunfire Cape" title="0.0081%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3068.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3068.png"></div><div class="item" value="Youmuu's Ghostblade" title="0.0079%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3142.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3142.png"></div><div class="item" value="Void Staff" title="0.0078%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3135.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3135.png"></div><div class="item" value="Ionian Boots of Lucidity" title="0.0077%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3158.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3158.png"></div><div class="item" value="Rite of Ruin" title="0.0073%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3430.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3430.png"></div><div class="item" value="Chain Vest" title="0.0072%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1031.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1031.png"></div><div class="item" value="Zeal" title="0.007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3086.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3086.png"></div><div class="item" value="Spectre's Cowl" title="0.0069%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3211.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3211.png"></div><div class="item" value="Dagger" title="0.0069%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1042.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1042.png"></div><div class="item" value="Face of the Mountain" title="0.0068%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3401.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3401.png"></div><div class="item" value="Cloth Armor" title="0.0063%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1029.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1029.png"></div><div class="item" value="Enchantment: Warrior" title="0.0063%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3707.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3707.png"></div><div class="item" value="Cloak of Agility" title="0.006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1018.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1018.png"></div><div class="item" value="Athene's Unholy Grail" title="0.0059%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3174.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3174.png"></div><div class="item" value="Aether Wisp" title="0.0059%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3113.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3113.png"></div><div class="item" value="Kindlegem" title="0.0058%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3067.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3067.png"></div><div class="item" value="Talisman of Ascension" title="0.0055%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3069.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3069.png"></div><div class="item" value="Warmog's Armor" title="0.0054%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3083.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3083.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0054%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1334.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1334.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0052%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3930.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3930.png"></div><div class="item" value="Sheen" title="0.0051%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3057.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3057.png"></div><div class="item" value="Lost Chapter" title="0.0051%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3433.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3433.png"></div><div class="item" value="Thornmail" title="0.0051%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3075.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3075.png"></div><div class="item" value="Enchantment: Homeguard" title="0.005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1319.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1319.png"></div><div class="item" value="Martyr's Gambit" title="0.0049%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3911.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3911.png"></div><div class="item" value="Banshee's Veil" title="0.0046%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3102.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3102.png"></div><div class="item" value="Frost Queen's Claim" title="0.0046%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3092.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3092.png"></div><div class="item" value="Warden's Mail" title="0.0045%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3082.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3082.png"></div><div class="item" value="Nashor's Tooth" title="0.0044%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3115.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3115.png"></div><div class="item" value="Mana Potion" title="0.0044%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2004.png"></div><div class="item" value="Null-Magic Mantle" title="0.0044%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1033.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1033.png"></div><div class="item" value="Abyssal Scepter" title="0.0044%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3001.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3001.png"></div><div class="item" value="Seeker's Armguard" title="0.0043%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3191.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3191.png"></div><div class="item" value="Doran's Shield" title="0.0043%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1054.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1054.png"></div><div class="item" value="Bilgewater Cutlass" title="0.0043%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3144.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3144.png"></div><div class="item" value="Ruby Sightstone" title="0.0041%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2045.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2045.png"></div><div class="item" value="Tear of the Goddess" title="0.0041%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3070.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3070.png"></div><div class="item" value="Locket of the Iron Solari" title="0.0041%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3190.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3190.png"></div><div class="item" value="Runaan's Hurricane (Ranged Only)" title="0.004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3085.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3085.png"></div><div class="item" value="Staff of Flowing Water" title="0.004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3744.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3744.png"></div><div class="item" value="Fiendish Codex" title="0.0039%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3108.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3108.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0037%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3725.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3725.png"></div><div class="item" value="Phage" title="0.0036%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3044.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3044.png"></div><div class="item" value="Avarice Blade" title="0.0034%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3093.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3093.png"></div><div class="item" value="Total Biscuit of Rejuvenation" title="0.0034%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2010.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2010.png"></div><div class="item" value="Iceborn Gauntlet" title="0.0032%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3025.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3025.png"></div><div class="item" value="Will of the Ancients" title="0.0032%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3152.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3152.png"></div><div class="item" value="Recurve Bow" title="0.0031%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1043.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1043.png"></div><div class="item" value="Boots of Swiftness" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3009.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3009.png"></div><div class="item" value="Globe of Trust" title="0.0029%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3840.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3840.png"></div><div class="item" value="Maw of Malmortius" title="0.0028%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3156.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3156.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0028%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3709.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3709.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0028%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3724.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3724.png"></div><div class="item" value="Righteous Glory" title="0.0028%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3800.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3800.png"></div><div class="item" value="Wit's End" title="0.0027%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3091.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3091.png"></div><div class="item" value="Enchantment: Furor" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1300.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1300.png"></div><div class="item" value="Haunting Guise" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3136.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3136.png"></div><div class="item" value="Chalice of Harmony" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3028.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3028.png"></div><div class="item" value="Forbidden Idol" title="0.0025%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3114.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3114.png"></div><div class="item" value="Stealth Ward" title="0.0024%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2044.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2044.png"></div><div class="item" value="Vision Ward" title="0.0024%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2043.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2043.png"></div><div class="item" value="Negatron Cloak" title="0.0023%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1057.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1057.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0023%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3931.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3931.png"></div><div class="item" value="Seraph's Embrace" title="0.0023%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3040.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3040.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1309.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1309.png"></div><div class="item" value="Crystalline Bracer" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3801.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3801.png"></div><div class="item" value="Hexdrinker" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3155.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3155.png"></div><div class="item" value="Puppeteer" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3745.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3745.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3708.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3708.png"></div><div class="item" value="Perfect Hex Core" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3198.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3198.png"></div><div class="item" value="Guardian Angel" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3026.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3026.png"></div><div class="item" value="Glacial Shroud" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3024.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3024.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3933.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3933.png"></div><div class="item" value="Hextech Gunblade" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3146.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3146.png"></div><div class="item" value="Frostfang" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3098.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3098.png"></div><div class="item" value="The Brutalizer" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3134.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3134.png"></div><div class="item" value="Tiamat (Melee Only)" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3077.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3077.png"></div><div class="item" value="Faerie Charm" title="0.0017%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1004.png"></div><div class="item" value="Targon's Brace" title="0.0017%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3097.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3097.png"></div><div class="item" value="Spellthief's Edge" title="0.0017%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3303.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3303.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0017%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1301.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1301.png"></div><div class="item" value="Relic Shield" title="0.0017%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3302.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3302.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1311.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1311.png"></div><div class="item" value="Muramana" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3042.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3042.png"></div><div class="item" value="Bami's Cinder" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3751.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3751.png"></div><div class="item" value="Enchantment: Devourer" title="0.0015%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3710.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3710.png"></div><div class="item" value="Swindler's Orb" title="0.0015%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3841.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3841.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0014%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1326.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1326.png"></div><div class="item" value="Ancient Coin" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3301.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3301.png"></div><div class="item" value="Zeke's Harbinger" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3050.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3050.png"></div><div class="item" value="Manamune" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3004.png"></div><div class="item" value="Sapphire Crystal" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1027.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1027.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3717.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3717.png"></div><div class="item" value="Enchantment: Warrior" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3714.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3714.png"></div><div class="item" value="Stalker's Blade" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3706.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3706.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1306.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1306.png"></div><div class="item" value="Essence Reaver" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3508.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3508.png"></div><div class="item" value="Zephyr" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3172.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3172.png"></div><div class="item" value="Enchantment: Devourer" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3718.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3718.png"></div><div class="item" value="Brawler's Gloves" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1051.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1051.png"></div><div class="item" value="Nomad's Medallion" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3096.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3096.png"></div><div class="item" value="Zz'Rot Portal" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3512.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3512.png"></div><div class="item" value="Stinger" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3101.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3101.png"></div><div class="item" value="Hextech Revolver" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3145.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3145.png"></div><div class="item" value="Banner of Command" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3060.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3060.png"></div><div class="item" value="Aegis of the Legion" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3105.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3105.png"></div><div class="item" value="Enchantment: Warrior" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3723.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3723.png"></div><div class="item" value="Frozen Mallet" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3022.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3022.png"></div><div class="item" value="Mercurial Scimitar" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3139.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3139.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3932.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3932.png"></div><div class="item" value="Quicksilver Sash" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3140.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3140.png"></div><div class="item" value="Archangel's Staff" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3003.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3003.png"></div><div class="item" value="Mejai's Soulstealer" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3041.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3041.png"></div><div class="item" value="Mikael's Crucible" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3222.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3222.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3721.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3721.png"></div><div class="item" value="Murksphere" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3844.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3844.png"></div><div class="item" value="Twin Shadows" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3023.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3023.png"></div><div class="item" value="Ardent Censer" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3504.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3504.png"></div><div class="item" value="The Hex Core mk-1" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3196.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3196.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1316.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1316.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1321.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1321.png"></div><div class="item" value="Catalyst the Protector" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3010.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3010.png"></div><div class="item" value="Guinsoo's Rageblade" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3124.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3124.png"></div><div class="item" value="Enchantment: Furor" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1330.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1330.png"></div><div class="item" value="Enchantment: Furor" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1310.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1310.png"></div><div class="item" value="The Hex Core mk-2" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3197.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3197.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3716.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3716.png"></div><div class="item" value="Enchantment: Furor" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1320.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1320.png"></div><div class="item" value="Skirmisher's Sabre" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3715.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3715.png"></div><div class="item" value="Rejuvenation Bead" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1006.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1006.png"></div><div class="item" value="Elixir of Wrath" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2140.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2140.png"></div><div class="item" value="Raptor Cloak" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2053.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2053.png"></div><div class="item" value="Prototype Hex Core" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3200.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3200.png"></div><div class="item" value="Enchantment: Distortion" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1328.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1328.png"></div><div class="item" value="Enchantment: Captain" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1327.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1327.png"></div><div class="item" value="Ranger's Trailblazer" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3713.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3713.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1331.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1331.png"></div><div class="item" value="Enchantment: Distortion" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1323.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1323.png"></div><div class="item" value="Enchantment: Distortion" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1313.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1313.png"></div><div class="item" value="Enchantment: Furor" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1305.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1305.png"></div><div class="item" value="Sword of the Occult" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3141.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3141.png"></div><div class="item" value="Enchantment: Devourer" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3722.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3722.png"></div><div class="item" value="Enchantment: Distortion" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1318.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1318.png"></div><div class="item" value="Enchantment: Devourer" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3726.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3726.png"></div><div class="item" value="The Black Spear" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3599.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3599.png"></div><div class="item" value="Hunter's Machete" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1039.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1039.png"></div><div class="item" value="Enchantment: Captain" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1317.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1317.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3720.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3720.png"></div><div class="item" value="Enchantment: Furor" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1325.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1325.png"></div><div class="item" value="Enchantment: Distortion" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1308.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1308.png"></div>				</div>

				<div class="ocklepoditems" style="display:none;width:100%;height:100%;overflow-y:auto;overflow-x:hidden;text-align:left;">
					<div class="item" value="Sightstone" title="0.0279%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2049.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2049.png"></div><div class="item" value="Sorcerer's Shoes" title="0.0153%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3020.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3020.png"></div><div class="item" value="Boots of Mobility" title="0.014%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3117.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3117.png"></div><div class="item" value="Infinity Edge" title="0.0127%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3031.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3031.png"></div><div class="item" value="Doran's Blade" title="0.012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1055.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1055.png"></div><div class="item" value="Blade of the Ruined King" title="0.012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3153.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3153.png"></div><div class="item" value="Berserker's Greaves" title="0.012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3006.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3006.png"></div><div class="item" value="Boots of Speed" title="0.0114%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1001.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1001.png"></div><div class="item" value="Doran's Ring" title="0.0109%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1056.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1056.png"></div><div class="item" value="Rabadon's Deathcap" title="0.0104%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3089.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3089.png"></div><div class="item" value="Zhonya's Hourglass" title="0.0095%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3157.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3157.png"></div><div class="item" value="Amplifying Tome" title="0.0095%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1052.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1052.png"></div><div class="item" value="Needlessly Large Rod" title="0.0092%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1058.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1058.png"></div><div class="item" value="Luden's Echo" title="0.0091%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3285.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3285.png"></div><div class="item" value="Trickster's Glass" title="0.0084%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3829.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3829.png"></div><div class="item" value="Enchantment: Homeguard" title="0.008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1329.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1329.png"></div><div class="item" value="Mercury's Treads" title="0.008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3111.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3111.png"></div><div class="item" value="Health Potion" title="0.0078%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2003.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2003.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0075%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1314.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1314.png"></div><div class="item" value="Last Whisper" title="0.0074%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3035.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3035.png"></div><div class="item" value="Spirit Visage" title="0.0074%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3065.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3065.png"></div><div class="item" value="Face of the Mountain" title="0.0074%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3401.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3401.png"></div><div class="item" value="Dead Man's Plate" title="0.0072%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3742.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3742.png"></div><div class="item" value="Blasting Wand" title="0.0071%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1026.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1026.png"></div><div class="item" value="Ravenous Hydra (Melee Only)" title="0.007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3074.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3074.png"></div><div class="item" value="Typhoon Claws" title="0.0067%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3652.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3652.png"></div><div class="item" value="Statikk Shiv" title="0.0065%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3087.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3087.png"></div><div class="item" value="Ruby Crystal" title="0.0062%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1028.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1028.png"></div><div class="item" value="Lich Bane" title="0.006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3100.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3100.png"></div><div class="item" value="Cloth Armor" title="0.006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1029.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1029.png"></div><div class="item" value="Frost Queen's Claim" title="0.0057%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3092.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3092.png"></div><div class="item" value="Frozen Heart" title="0.0057%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3110.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3110.png"></div><div class="item" value="Giant's Belt" title="0.0057%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1011.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1011.png"></div><div class="item" value="The Bloodthirster" title="0.0057%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3072.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3072.png"></div><div class="item" value="Randuin's Omen" title="0.0057%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3143.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3143.png"></div><div class="item" value="Rod of Ages" title="0.0055%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3027.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3027.png"></div><div class="item" value="Vampiric Scepter" title="0.0055%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1053.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1053.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0054%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1304.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1304.png"></div><div class="item" value="Talisman of Ascension" title="0.0053%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3069.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3069.png"></div><div class="item" value="Flesheater (Melee Only)" title="0.0052%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3924.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3924.png"></div><div class="item" value="Pox Arcana" title="0.0052%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3434.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3434.png"></div><div class="item" value="Netherstride Grimoire" title="0.0052%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3431.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3431.png"></div><div class="item" value="Globe of Trust" title="0.0051%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3840.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3840.png"></div><div class="item" value="Trinity Force" title="0.0051%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3078.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3078.png"></div><div class="item" value="Ruby Sightstone" title="0.005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2045.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2045.png"></div><div class="item" value="Sunfire Cape" title="0.0047%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3068.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3068.png"></div><div class="item" value="Martyr's Gambit" title="0.0046%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3911.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3911.png"></div><div class="item" value="Pickaxe" title="0.0045%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1037.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1037.png"></div><div class="item" value="Ninja Tabi" title="0.0045%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3047.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3047.png"></div><div class="item" value="B. F. Sword" title="0.0042%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1038.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1038.png"></div><div class="item" value="The Black Cleaver" title="0.0042%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3071.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3071.png"></div><div class="item" value="Ionian Boots of Lucidity" title="0.0041%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3158.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3158.png"></div><div class="item" value="Void Staff" title="0.004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3135.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3135.png"></div><div class="item" value="Rite of Ruin" title="0.004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3430.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3430.png"></div><div class="item" value="Locket of the Iron Solari" title="0.0039%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3190.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3190.png"></div><div class="item" value="Mirage Blade" title="0.0037%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3150.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3150.png"></div><div class="item" value="Liandry's Torment" title="0.0037%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3151.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3151.png"></div><div class="item" value="Staff of Flowing Water" title="0.0037%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3744.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3744.png"></div><div class="item" value="Kindlegem" title="0.0037%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3067.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3067.png"></div><div class="item" value="Warden's Mail" title="0.0037%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3082.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3082.png"></div><div class="item" value="Lost Chapter" title="0.0036%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3433.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3433.png"></div><div class="item" value="Chain Vest" title="0.0036%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1031.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1031.png"></div><div class="item" value="Zeal" title="0.0036%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3086.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3086.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0035%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1324.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1324.png"></div><div class="item" value="Spectre's Cowl" title="0.0035%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3211.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3211.png"></div><div class="item" value="Vision Ward" title="0.0035%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2043.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2043.png"></div><div class="item" value="Phantom Dancer" title="0.0034%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3046.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3046.png"></div><div class="item" value="Banshee's Veil" title="0.0034%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3102.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3102.png"></div><div class="item" value="Mana Potion" title="0.0033%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2004.png"></div><div class="item" value="Enchantment: Warrior" title="0.0032%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3707.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3707.png"></div><div class="item" value="Frostfang" title="0.0031%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3098.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3098.png"></div><div class="item" value="Crystalline Flask" title="0.003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2041.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2041.png"></div><div class="item" value="Rylai's Crystal Scepter" title="0.0029%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3116.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3116.png"></div><div class="item" value="Youmuu's Ghostblade" title="0.0029%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3142.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3142.png"></div><div class="item" value="Athene's Unholy Grail" title="0.0029%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3174.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3174.png"></div><div class="item" value="Forbidden Idol" title="0.0028%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3114.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3114.png"></div><div class="item" value="Long Sword" title="0.0027%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1036.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1036.png"></div><div class="item" value="Thornmail" title="0.0027%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3075.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3075.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3724.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3724.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3930.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3930.png"></div><div class="item" value="Righteous Glory" title="0.0026%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3800.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3800.png"></div><div class="item" value="Puppeteer" title="0.0025%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3745.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3745.png"></div><div class="item" value="Total Biscuit of Rejuvenation" title="0.0025%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2010.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2010.png"></div><div class="item" value="Null-Magic Mantle" title="0.0024%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1033.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1033.png"></div><div class="item" value="Aether Wisp" title="0.0024%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3113.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3113.png"></div><div class="item" value="Glacial Shroud" title="0.0024%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3024.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3024.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0023%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1319.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1319.png"></div><div class="item" value="Seeker's Armguard" title="0.0023%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3191.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3191.png"></div><div class="item" value="Haunting Guise" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3136.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3136.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1334.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1334.png"></div><div class="item" value="Crystalline Bracer" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3801.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3801.png"></div><div class="item" value="Dagger" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1042.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1042.png"></div><div class="item" value="Chalice of Harmony" title="0.0022%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3028.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3028.png"></div><div class="item" value="Warmog's Armor" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3083.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3083.png"></div><div class="item" value="Boots of Swiftness" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3009.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3009.png"></div><div class="item" value="Targon's Brace" title="0.0021%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3097.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3097.png"></div><div class="item" value="Fiendish Codex" title="0.002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3108.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3108.png"></div><div class="item" value="Nashor's Tooth" title="0.002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3115.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3115.png"></div><div class="item" value="Phage" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3044.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3044.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0019%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3725.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3725.png"></div><div class="item" value="Seraph's Embrace" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3040.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3040.png"></div><div class="item" value="Sheen" title="0.0018%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3057.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3057.png"></div><div class="item" value="Spellthief's Edge" title="0.0017%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3303.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3303.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3709.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3709.png"></div><div class="item" value="Abyssal Scepter" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3001.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3001.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0016%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3708.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3708.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0015%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3931.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3931.png"></div><div class="item" value="Ardent Censer" title="0.0014%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3504.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3504.png"></div><div class="item" value="Guardian Angel" title="0.0014%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3026.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3026.png"></div><div class="item" value="Iceborn Gauntlet" title="0.0014%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3025.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3025.png"></div><div class="item" value="Doran's Shield" title="0.0014%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1054.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1054.png"></div><div class="item" value="Enchantment: Homeguard" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1309.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1309.png"></div><div class="item" value="Cloak of Agility" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1018.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1018.png"></div><div class="item" value="Stealth Ward" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2044.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2044.png"></div><div class="item" value="Relic Shield" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3302.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3302.png"></div><div class="item" value="Tear of the Goddess" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3070.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3070.png"></div><div class="item" value="Nomad's Medallion" title="0.0013%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3096.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3096.png"></div><div class="item" value="Bilgewater Cutlass" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3144.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3144.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1326.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1326.png"></div><div class="item" value="Mikael's Crucible" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3222.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3222.png"></div><div class="item" value="Swindler's Orb" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3841.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3841.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1311.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1311.png"></div><div class="item" value="Aegis of the Legion" title="0.0012%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3105.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3105.png"></div><div class="item" value="Avarice Blade" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3093.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3093.png"></div><div class="item" value="The Brutalizer" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3134.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3134.png"></div><div class="item" value="Enchantment: Furor" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1300.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1300.png"></div><div class="item" value="Zeke's Harbinger" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3050.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3050.png"></div><div class="item" value="Tiamat (Melee Only)" title="0.0011%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3077.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3077.png"></div><div class="item" value="Negatron Cloak" title="0.001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1057.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1057.png"></div><div class="item" value="Enchantment: Devourer" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3718.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3718.png"></div><div class="item" value="Perfect Hex Core" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3198.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3198.png"></div><div class="item" value="Runaan's Hurricane (Ranged Only)" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3085.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3085.png"></div><div class="item" value="Manamune" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3004.png"></div><div class="item" value="Sapphire Crystal" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1027.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1027.png"></div><div class="item" value="Wit's End" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3091.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3091.png"></div><div class="item" value="Catalyst the Protector" title="0.0009%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3010.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3010.png"></div><div class="item" value="Mejai's Soulstealer" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3041.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3041.png"></div><div class="item" value="Muramana" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3042.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3042.png"></div><div class="item" value="Twin Shadows" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3023.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3023.png"></div><div class="item" value="Bami's Cinder" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3751.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3751.png"></div><div class="item" value="Recurve Bow" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1043.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1043.png"></div><div class="item" value="Maw of Malmortius" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3156.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3156.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0008%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3933.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3933.png"></div><div class="item" value="Brawler's Gloves" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1051.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1051.png"></div><div class="item" value="Murksphere" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3844.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3844.png"></div><div class="item" value="Hexdrinker" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3155.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3155.png"></div><div class="item" value="Enchantment: Warrior" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3723.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3723.png"></div><div class="item" value="Enchantment: Devourer" title="0.0007%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3710.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3710.png"></div><div class="item" value="Frozen Mallet" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3022.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3022.png"></div><div class="item" value="Enchantment: Devourer" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3726.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3726.png"></div><div class="item" value="Banner of Command" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3060.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3060.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1321.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1321.png"></div><div class="item" value="Hextech Revolver" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3145.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3145.png"></div><div class="item" value="Will of the Ancients" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3152.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3152.png"></div><div class="item" value="Rejuvenation Bead" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1006.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1006.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0006%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3717.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3717.png"></div><div class="item" value="The Hex Core mk-2" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3197.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3197.png"></div><div class="item" value="Hextech Gunblade" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3146.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3146.png"></div><div class="item" value="Ancient Coin" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3301.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3301.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0005%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1306.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1306.png"></div><div class="item" value="Enchantment: Captain" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1327.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1327.png"></div><div class="item" value="Enchantment: Distortion" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1313.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1313.png"></div><div class="item" value="Raptor Cloak" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2053.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/2053.png"></div><div class="item" value="Archangel's Staff" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3003.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3003.png"></div><div class="item" value="Stinger" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3101.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3101.png"></div><div class="item" value="Zephyr" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3172.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3172.png"></div><div class="item" value="Faerie Charm" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1004.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1004.png"></div><div class="item" value="Enchantment: Sated Devourer" title="0.0004%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3932.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3932.png"></div><div class="item" value="Enchantment: Devourer" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3722.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3722.png"></div><div class="item" value="Quicksilver Sash" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3140.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3140.png"></div><div class="item" value="Enchantment: Cinderhulk" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3721.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3721.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3716.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3716.png"></div><div class="item" value="Essence Reaver" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3508.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3508.png"></div><div class="item" value="Zz'Rot Portal" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3512.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3512.png"></div><div class="item" value="Stalker's Blade" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3706.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3706.png"></div><div class="item" value="Enchantment: Warrior" title="0.0003%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3714.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3714.png"></div><div class="item" value="Enchantment: Captain" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1307.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1307.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1301.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1301.png"></div><div class="item" value="Enchantment: Captain" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1312.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1312.png"></div><div class="item" value="Enchantment: Furor" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1325.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1325.png"></div><div class="item" value="Ranger's Trailblazer" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3713.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3713.png"></div><div class="item" value="Enchantment: Furor" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1330.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1330.png"></div><div class="item" value="The Hex Core mk-1" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3196.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3196.png"></div><div class="item" value="Mercurial Scimitar" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3139.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3139.png"></div><div class="item" value="Skirmisher's Sabre" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3715.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3715.png"></div><div class="item" value="Enchantment: Distortion" title="0.0002%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1328.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1328.png"></div><div class="item" value="Enchantment: Runeglaive" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3720.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3720.png"></div><div class="item" value="Guinsoo's Rageblade" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3124.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3124.png"></div><div class="item" value="Enchantment: Furor" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1320.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1320.png"></div><div class="item" value="Sword of the Occult" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3141.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3141.png"></div><div class="item" value="Enchantment: Alacrity" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1331.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1331.png"></div><div class="item" value="Hunter's Machete" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1039.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1039.png"></div><div class="item" value="Enchantment: Captain" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1322.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1322.png"></div><div class="item" value="Enchantment: Furor" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1315.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1315.png"></div><div class="item" value="The Black Spear" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3599.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3599.png"></div><div class="item" value="Enchantment: Furor" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1310.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/1310.png"></div><div class="item" value="Enchantment: Warrior" title="0.0001%" style="display:inline-block;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3719.png');background-size: 100% 100%;" src="http://ddragon.leagueoflegends.com/cdn/5.15.1/img/item/3719.png"></div>				</div>

				
							<div class="1" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Annie.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Annie<br />Pick rate: 1.24%<br />Rank: #35</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="42.74%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="42.74%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="31.45%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.45%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="16.94%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.94%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.87%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.87%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="2" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Olaf.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Olaf<br />Pick rate: 0.33%<br />Rank: #25</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="33.33%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.33%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="15.15%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.15%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="15.15%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.15%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="3" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Galio.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Galio<br />Pick rate: 0.19%<br />Rank: #107</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="21.05%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.05%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="31.58%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.58%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.05%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.05%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="26.32%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.32%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="4" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/TwistedFate.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">TwistedFate<br />Pick rate: 1.45%<br />Rank: #42</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="28.28%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.28%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="30.34%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.34%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="28.97%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.97%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="12.41%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.41%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="5" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/XinZhao.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">XinZhao<br />Pick rate: 1.27%<br />Rank: #9</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="22.05%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.05%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="49.61%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="49.61%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="18.11%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="18.11%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.09%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.09%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="6" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Urgot.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Urgot<br />Pick rate: 0.15%<br />Rank: #90</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="33.33%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="40%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="40%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="6.67%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="6.67%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="20%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="7" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Leblanc.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Leblanc<br />Pick rate: 0.57%<br />Rank: #115</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="31.58%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.58%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="29.82%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.82%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="26.32%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.32%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="12.28%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.28%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="8" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Vladimir.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Vladimir<br />Pick rate: 0.66%<br />Rank: #23</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="21.21%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.21%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="37.88%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="37.88%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="36.36%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="36.36%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="4.55%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="4.55%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="9" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/FiddleSticks.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">FiddleSticks<br />Pick rate: 0.44%<br />Rank: #24</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="22.73%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.73%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="27.27%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.27%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="34.09%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.09%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="15.91%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.91%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="10" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Kayle.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Kayle<br />Pick rate: 0.91%<br />Rank: #67</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="41.76%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="41.76%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="35.16%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.16%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="12.09%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.09%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="9.89%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.89%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="11" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/MasterYi.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">MasterYi<br />Pick rate: 1.38%<br />Rank: #69</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="31.16%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.16%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="35.51%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.51%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="23.19%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.19%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.14%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.14%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="12" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Alistar.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Alistar<br />Pick rate: 0.56%<br />Rank: #64</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="14.29%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.29%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.93%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.93%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="19.64%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.64%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="32.14%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.14%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="13" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ryze.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Ryze<br />Pick rate: 0.14%<br />Rank: #125</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="42.86%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="42.86%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="28.57%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.57%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.43%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.43%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.14%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.14%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="14" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Sion.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Sion<br />Pick rate: 0.57%<br />Rank: #103</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="15.79%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.79%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="45.61%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="45.61%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="28.07%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.07%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.53%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.53%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="15" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Sivir.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Sivir<br />Pick rate: 0.77%<br />Rank: #56</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="36.36%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="36.36%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="23.38%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.38%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="23.38%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.38%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="15.58%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.58%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="16" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Soraka.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Soraka<br />Pick rate: 0.96%<br />Rank: #18</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="27.08%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.08%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="27.08%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.08%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.88%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.88%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="19.79%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.79%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="17" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Teemo.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Teemo<br />Pick rate: 1.51%<br />Rank: #54</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="35.1%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.1%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="24.5%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="24.5%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="31.79%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.79%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.61%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.61%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="18" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Tristana.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Tristana<br />Pick rate: 1.27%<br />Rank: #26</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.92%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.92%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="32.28%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.28%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="34.65%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.65%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="3.15%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="3.15%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="19" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Warwick.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Warwick<br />Pick rate: 1.13%<br />Rank: #16</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="48.67%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="48.67%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="23.89%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.89%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="16.81%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.81%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.96%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.96%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="20" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nunu.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Nunu<br />Pick rate: 0.49%<br />Rank: #37</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.69%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.69%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="28.57%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.57%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="26.53%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.53%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.2%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.2%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="21" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/MissFortune.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">MissFortune<br />Pick rate: 2.68%<br />Rank: #27</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.85%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.85%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.96%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.96%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="26.49%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.49%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="9.33%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.33%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="22" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ashe.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Ashe<br />Pick rate: 2.28%<br />Rank: #58</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="39.04%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="39.04%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="30.26%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.26%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="23.25%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.25%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.02%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.02%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="23" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Tryndamere.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Tryndamere<br />Pick rate: 1.09%<br />Rank: #44</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="38.53%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="38.53%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="24.77%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="24.77%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="28.44%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.44%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.26%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.26%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="24" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Jax.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Jax<br />Pick rate: 1.08%<br />Rank: #63</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="35.19%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.19%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="37.04%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="37.04%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="17.59%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.59%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.19%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.19%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="25" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Morgana.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Morgana<br />Pick rate: 1.1%<br />Rank: #22</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.09%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.09%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="26.36%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.36%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="23.64%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.64%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="20.91%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20.91%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="26" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Zilean.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Zilean<br />Pick rate: 0.23%<br />Rank: #123</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="26.09%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.09%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="17.39%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.39%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.74%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.74%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="30.43%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.43%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="27" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Singed.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Singed<br />Pick rate: 0.38%<br />Rank: #40</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="26.32%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.32%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="39.47%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="39.47%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="23.68%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.68%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.53%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.53%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="28" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Evelynn.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Evelynn<br />Pick rate: 0.65%<br />Rank: #100</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="36.92%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="36.92%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="30.77%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.77%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.54%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.54%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.77%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.77%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="29" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Twitch.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Twitch<br />Pick rate: 0.45%<br />Rank: #53</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="33.33%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.33%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="24.44%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="24.44%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.89%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.89%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="30" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Karthus.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Karthus<br />Pick rate: 0.27%<br />Rank: #78</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="14.81%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.81%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.33%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="33.33%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="18.52%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="18.52%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="31" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Chogath.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Chogath<br />Pick rate: 0.78%<br />Rank: #41</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="35.9%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.9%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.33%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="19.23%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.23%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.54%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.54%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="32" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Amumu.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Amumu<br />Pick rate: 0.42%<br />Rank: #19</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="16.67%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.67%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="45.24%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="45.24%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.43%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.43%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="16.67%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.67%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="33" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Rammus.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Rammus<br />Pick rate: 0.27%<br />Rank: #77</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.63%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.63%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="55.56%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="55.56%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="3.7%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="3.7%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.11%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.11%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="34" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Anivia.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Anivia<br />Pick rate: 0.34%<br />Rank: #109</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="55.88%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="55.88%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="26.47%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.47%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="8.82%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.82%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.82%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.82%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="35" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Shaco.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Shaco<br />Pick rate: 0.87%<br />Rank: #94</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.89%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.89%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="36.78%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="36.78%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="20.69%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20.69%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.49%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.49%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="36" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/DrMundo.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">DrMundo<br />Pick rate: 0.26%<br />Rank: #117</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="19.23%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.23%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="50%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="50%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="15.38%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.38%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="15.38%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.38%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="37" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Sona.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Sona<br />Pick rate: 1.35%<br />Rank: #104</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="25.93%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.93%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="22.96%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.96%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="17.04%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.04%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="32.59%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.59%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="38" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Kassadin.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Kassadin<br />Pick rate: 0.14%<br />Rank: #106</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="7.14%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.14%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="42.86%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="42.86%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="28.57%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.57%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="21.43%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.43%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="39" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Irelia.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Irelia<br />Pick rate: 0.62%<br />Rank: #62</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="27.42%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.42%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="35.48%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.48%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="24.19%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="24.19%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="9.68%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.68%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="40" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Janna.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Janna<br />Pick rate: 0.74%<br />Rank: #29</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="18.92%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="18.92%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="31.08%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.08%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="17.57%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.57%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="31.08%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.08%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="42" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Corki.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Corki<br />Pick rate: 0.38%<br />Rank: #65</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.21%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.21%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="39.47%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="39.47%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="15.79%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.79%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.53%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.53%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="43" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Karma.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Karma<br />Pick rate: 0.52%<br />Rank: #111</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.62%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.62%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="21.15%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.15%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="15.38%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.38%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="28.85%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.85%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="44" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Taric.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Taric<br />Pick rate: 0.3%<br />Rank: #7</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="30%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="43.33%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="43.33%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="13.33%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="13.33%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="13.33%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="13.33%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="45" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Veigar.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Veigar<br />Pick rate: 0.52%<br />Rank: #80</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="30.77%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.77%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="26.92%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.92%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="17.31%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.31%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="48" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Trundle.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Trundle<br />Pick rate: 0.37%<br />Rank: #2</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.73%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.73%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="45.95%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="45.95%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="16.22%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.22%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.11%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.11%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="50" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Swain.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Swain<br />Pick rate: 0.32%<br />Rank: #36</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="50%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="50%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="21.88%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.88%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="3.13%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="3.13%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="51" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Caitlyn.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Caitlyn<br />Pick rate: 1.58%<br />Rank: #49</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.18%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.18%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="34.81%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.81%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.52%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.52%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.23%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.23%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="53" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Blitzcrank.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Blitzcrank<br />Pick rate: 1.62%<br />Rank: #11</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.63%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.63%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="35.8%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.8%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="19.14%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.14%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="15.43%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.43%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="54" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Malphite.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Malphite<br />Pick rate: 0.7%<br />Rank: #73</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="27.14%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.14%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="45.71%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="45.71%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="14.29%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.29%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.43%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.43%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="55" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Katarina.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Katarina<br />Pick rate: 0.8%<br />Rank: #114</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="33.75%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.75%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.75%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.75%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.5%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.5%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="56" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nocturne.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Nocturne<br />Pick rate: 0.46%<br />Rank: #46</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="21.74%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.74%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="43.48%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="43.48%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="19.57%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.57%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="15.22%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.22%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="57" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Maokai.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Maokai<br />Pick rate: 0.51%<br />Rank: #88</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="19.61%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.61%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="52.94%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="52.94%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="15.69%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.69%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.84%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.84%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="58" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Renekton.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Renekton<br />Pick rate: 0.39%<br />Rank: #72</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="30.77%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.77%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.33%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="20.51%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20.51%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="15.38%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.38%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="59" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/JarvanIV.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">JarvanIV<br />Pick rate: 0.56%<br />Rank: #76</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="26.79%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.79%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="39.29%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="39.29%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="23.21%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.21%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.93%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.93%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="60" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Elise.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Elise<br />Pick rate: 0.84%<br />Rank: #84</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="28.57%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.57%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="40.48%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="40.48%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="16.67%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.67%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="14.29%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.29%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="61" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Orianna.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Orianna<br />Pick rate: 0.51%<br />Rank: #55</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.41%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.41%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="37.25%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="37.25%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.57%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.57%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.76%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.76%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="62" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/MonkeyKing.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">MonkeyKing<br />Pick rate: 0.73%<br />Rank: #5</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.25%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.25%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="41.1%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="41.1%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="17.81%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.81%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="6.85%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="6.85%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="63" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Brand.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Brand<br />Pick rate: 0.57%<br />Rank: #39</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="26.32%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.32%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="31.58%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.58%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.05%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.05%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="19.3%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.3%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="64" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/LeeSin.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">LeeSin<br />Pick rate: 1.09%<br />Rank: #102</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="39.45%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="39.45%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.03%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.03%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="17.43%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.43%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.26%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.26%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="67" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Vayne.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Vayne<br />Pick rate: 1.92%<br />Rank: #20</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="30.21%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.21%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="32.29%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.29%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="26.56%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.56%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="9.9%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.9%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="68" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Rumble.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Rumble<br />Pick rate: 0.27%<br />Rank: #8</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="40.74%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="40.74%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="22.22%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.22%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="37.04%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="37.04%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="0%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="0%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="69" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Cassiopeia.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Cassiopeia<br />Pick rate: 0.26%<br />Rank: #116</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="53.85%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="53.85%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="3.85%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="3.85%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="38.46%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="38.46%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="0%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="0%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="72" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Skarner.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Skarner<br />Pick rate: 0.2%<br />Rank: #61</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="35%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="25%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="40%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="40%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="0%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="0%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="74" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Heimerdinger.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Heimerdinger<br />Pick rate: 0.97%<br />Rank: #13</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="31.96%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.96%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="29.9%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.9%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="29.9%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.9%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.25%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.25%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="75" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nasus.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Nasus<br />Pick rate: 1.09%<br />Rank: #57</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="32.11%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.11%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="37.61%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="37.61%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25.69%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.69%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="4.59%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="4.59%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="76" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nidalee.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Nidalee<br />Pick rate: 1.22%<br />Rank: #119</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="31.15%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.15%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="28.69%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.69%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.31%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.31%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="16.39%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.39%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="77" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Udyr.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Udyr<br />Pick rate: 0.91%<br />Rank: #12</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="32.97%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.97%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="40.66%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="40.66%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="10.99%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.99%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="15.38%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.38%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="78" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Poppy.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Poppy<br />Pick rate: 0.06%<br />Rank: #120</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="33.33%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.33%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="33.33%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="0%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="0%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="79" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Gragas.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Gragas<br />Pick rate: 0.27%<br />Rank: #79</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="14.81%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.81%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="59.26%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="59.26%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="14.81%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.81%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.11%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.11%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="80" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Pantheon.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Pantheon<br />Pick rate: 0.56%<br />Rank: #75</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="32.14%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.14%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="28.57%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.57%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="32.14%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.14%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.14%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.14%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="81" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ezreal.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Ezreal<br />Pick rate: 1.08%<br />Rank: #105</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="37.96%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="37.96%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="28.7%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.7%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.33%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.33%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="82" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Mordekaiser.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Mordekaiser<br />Pick rate: 0.28%<br />Rank: #30</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="25%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="53.57%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="53.57%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="14.29%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.29%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.14%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.14%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="83" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Yorick.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Yorick<br />Pick rate: 0.23%<br />Rank: #82</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.78%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.78%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="21.74%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.74%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="30.43%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.43%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="13.04%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="13.04%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="84" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Akali.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Akali<br />Pick rate: 0.42%<br />Rank: #60</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="30.95%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.95%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="28.57%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.57%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="33.33%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.14%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.14%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="85" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Kennen.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Kennen<br />Pick rate: 0.24%<br />Rank: #124</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="33.33%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="41.67%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="41.67%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="12.5%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.5%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="12.5%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.5%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="86" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Garen.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Garen<br />Pick rate: 1.12%<br />Rank: #59</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="30.36%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.36%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="40.18%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="40.18%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="23.21%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.21%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="5.36%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="5.36%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="89" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Leona.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Leona<br />Pick rate: 1.16%<br />Rank: #32</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="30.17%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.17%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="37.07%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="37.07%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="12.93%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.93%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="19.83%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.83%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="90" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Malzahar.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Malzahar<br />Pick rate: 0.76%<br />Rank: #85</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="25%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="30.26%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.26%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="31.58%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.58%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="13.16%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="13.16%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="91" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Talon.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Talon<br />Pick rate: 0.46%<br />Rank: #4</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="45.65%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="45.65%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="30.43%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.43%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="17.39%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.39%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="6.52%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="6.52%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="92" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Riven.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Riven<br />Pick rate: 0.92%<br />Rank: #113</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="35.87%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.87%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="30.43%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.43%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.61%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.61%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="96" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/KogMaw.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">KogMaw<br />Pick rate: 0.83%<br />Rank: #89</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="31.33%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.33%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="28.92%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.92%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25.3%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.3%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="12.05%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.05%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="98" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Shen.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Shen<br />Pick rate: 0.68%<br />Rank: #15</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="30.88%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.88%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="38.24%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="38.24%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="19.12%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.12%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.76%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.76%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="99" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Lux.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Lux<br />Pick rate: 1.48%<br />Rank: #95</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="31.76%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.76%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="25.68%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.68%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="29.05%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.05%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="13.51%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="13.51%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="101" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Xerath.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Xerath<br />Pick rate: 0.45%<br />Rank: #33</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="22.22%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.22%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="40%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="40%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="26.67%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.67%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.11%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.11%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="102" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Shyvana.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Shyvana<br />Pick rate: 1.26%<br />Rank: #3</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.37%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.37%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="39.68%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="39.68%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="15.87%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="15.87%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="12.7%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.7%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="103" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ahri.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Ahri<br />Pick rate: 1.12%<br />Rank: #38</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="36.61%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="36.61%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="27.68%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.68%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="26.79%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.79%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.93%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.93%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="104" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Graves.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Graves<br />Pick rate: 1.22%<br />Rank: #28</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="33.61%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.61%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="22.13%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.13%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="32.79%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.79%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="9.84%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.84%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="105" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Fizz.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Fizz<br />Pick rate: 1.41%<br />Rank: #74</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="33.33%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.33%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="25.53%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.53%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="28.37%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.37%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="12.06%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.06%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="106" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Volibear.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Volibear<br />Pick rate: 0.54%<br />Rank: #17</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="31.48%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.48%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="40.74%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="40.74%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="16.67%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.67%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.11%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.11%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="107" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Rengar.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Rengar<br />Pick rate: 0.92%<br />Rank: #97</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="32.61%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.61%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="34.78%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.78%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="23.91%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.91%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.61%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.61%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="110" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Varus.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Varus<br />Pick rate: 0.85%<br />Rank: #87</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.12%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.12%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="32.94%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.94%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="24.71%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="24.71%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.06%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.06%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="111" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nautilus.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Nautilus<br />Pick rate: 1.63%<br />Rank: #21</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="21.47%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.47%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="48.47%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="48.47%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.47%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.47%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.59%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.59%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="112" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Viktor.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Viktor<br />Pick rate: 1.41%<br />Rank: #66</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="30.5%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.5%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="31.91%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.91%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25.53%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.53%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.35%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.35%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="113" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Sejuani.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Sejuani<br />Pick rate: 0.3%<br />Rank: #1</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="23.33%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.33%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="56.67%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="56.67%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="10%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="114" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Fiora.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Fiora<br />Pick rate: 0.71%<br />Rank: #68</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="32.39%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.39%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="32.39%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.39%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="26.76%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.76%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.45%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.45%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="115" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ziggs.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Ziggs<br />Pick rate: 0.5%<br />Rank: #47</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="44%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="44%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="16%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="6%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="6%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="117" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Lulu.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Lulu<br />Pick rate: 0.6%<br />Rank: #34</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="25%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="21.67%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.67%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="23.33%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.33%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="30%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="119" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Draven.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Draven<br />Pick rate: 0.65%<br />Rank: #43</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="27.69%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.69%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="44.62%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="44.62%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="16.92%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.92%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.69%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.69%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="120" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Hecarim.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Hecarim<br />Pick rate: 0.49%<br />Rank: #122</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="32.65%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.65%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="40.82%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="40.82%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="12.24%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.24%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="14.29%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.29%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="121" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Khazix.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Khazix<br />Pick rate: 0.52%<br />Rank: #101</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="21.15%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.15%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="36.54%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="36.54%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="32.69%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.69%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="9.62%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.62%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="122" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Darius.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Darius<br />Pick rate: 1.56%<br />Rank: #48</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="36.54%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="36.54%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="35.26%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.26%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="20.51%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20.51%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="5.77%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="5.77%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="126" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Jayce.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Jayce<br />Pick rate: 0.47%<br />Rank: #70</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.04%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.04%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="25.53%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.53%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="27.66%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.66%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.64%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.64%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="127" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Lissandra.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Lissandra<br />Pick rate: 0.18%<br />Rank: #121</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="22.22%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.22%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="44.44%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="44.44%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="16.67%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.67%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="16.67%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.67%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="131" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Diana.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Diana<br />Pick rate: 1.44%<br />Rank: #81</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="38.89%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="38.89%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="36.81%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="36.81%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="13.19%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="13.19%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.42%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.42%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="133" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Quinn.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Quinn<br />Pick rate: 1%<br />Rank: #110</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="42%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="42%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="28%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="134" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Syndra.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Syndra<br />Pick rate: 0.23%<br />Rank: #45</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="21.74%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.74%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="39.13%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="39.13%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="26.09%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.09%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="13.04%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="13.04%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="143" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Zyra.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Zyra<br />Pick rate: 0.31%<br />Rank: #6</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="41.94%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="41.94%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="32.26%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.26%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="9.68%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.68%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="16.13%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="16.13%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="150" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Gnar.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Gnar<br />Pick rate: 0.89%<br />Rank: #98</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="33.71%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.71%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="35.96%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.96%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="21.35%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.35%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.87%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.87%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="154" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Zac.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Zac<br />Pick rate: 0.24%<br />Rank: #96</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="45.83%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="45.83%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="20.83%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20.83%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="20.83%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20.83%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="12.5%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="12.5%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="157" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Yasuo.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Yasuo<br />Pick rate: 1.51%<br />Rank: #83</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="45.03%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="45.03%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="27.81%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.81%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="17.88%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.88%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="9.27%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.27%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="161" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Velkoz.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Velkoz<br />Pick rate: 0.65%<br />Rank: #108</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="26.15%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.15%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="30.77%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="30.77%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="27.69%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.69%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="13.85%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="13.85%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="201" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Braum.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Braum<br />Pick rate: 0.69%<br />Rank: #14</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="23.19%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="23.19%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="50.72%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="50.72%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="14.49%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.49%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.59%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.59%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="222" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Jinx.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Jinx<br />Pick rate: 2.38%<br />Rank: #71</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="32.77%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.77%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="29.41%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.41%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="26.89%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="26.89%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="10.5%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="10.5%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="223" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/TahmKench.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">TahmKench<br />Pick rate: 2.18%<br />Rank: #112</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="25.69%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.69%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.94%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.94%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="22.48%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.48%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="17.43%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.43%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="236" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Lucian.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Lucian<br />Pick rate: 0.48%<br />Rank: #118</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="43.75%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="43.75%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="22.92%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.92%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="27.08%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.08%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="6.25%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="6.25%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="238" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Zed.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Zed<br />Pick rate: 0.73%<br />Rank: #10</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="50.68%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="50.68%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="19.18%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.18%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="19.18%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.18%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="9.59%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.59%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="245" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Ekko.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Ekko<br />Pick rate: 1.14%<br />Rank: #86</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.21%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.21%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="28.95%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.95%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25.44%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.44%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="9.65%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="9.65%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="254" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Vi.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Vi<br />Pick rate: 0.8%<br />Rank: #91</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="28.75%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.75%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="41.25%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="41.25%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="17.5%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.5%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="11.25%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="11.25%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="266" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Aatrox.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Aatrox<br />Pick rate: 0.82%<br />Rank: #51</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="28.05%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="28.05%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="32.93%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="32.93%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="25.61%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="25.61%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="13.41%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="13.41%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="267" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Nami.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Nami<br />Pick rate: 1.06%<br />Rank: #92</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="31.13%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="31.13%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.96%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.96%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="14.15%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="14.15%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="20.75%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20.75%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="268" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Azir.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Azir<br />Pick rate: 0.45%<br />Rank: #52</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="35.56%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="35.56%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="37.78%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="37.78%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="20%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="6.67%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="6.67%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="412" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Thresh.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Thresh<br />Pick rate: 1.87%<br />Rank: #31</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="24.06%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="24.06%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="33.16%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="33.16%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="17.65%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="17.65%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="24.06%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="24.06%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="421" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/RekSai.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">RekSai<br />Pick rate: 0.49%<br />Rank: #99</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="34.69%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.69%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="34.69%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="34.69%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="20.41%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="20.41%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="8.16%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="8.16%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="429" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Kalista.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Kalista<br />Pick rate: 0.68%<br />Rank: #50</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="41.18%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="41.18%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="27.94%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="27.94%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="22.06%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="22.06%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="7.35%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="7.35%">Ocklepods</span-->
									</div>
								</div>

							</div>
							
							<div class="432" style="display:none;text-align:left;">
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-color:rgba(0,0,0,0.5);background-size:100% 100%;z-index:-1;"></span>
								<span style="position:absolute;right:0px;top:0px;height:100%;padding-right:50%;background-image:url('http://ddragon.leagueoflegends.com/cdn/5.15.1/img/champion/Bard.png');background-size:100% 100%;z-index:-2;"></span>
								<div style="text-align:center;">Bard<br />Pick rate: 1.02%<br />Rank: #93</div>

								<div>Brawler pick rate</div>
								<div class="smallfour" style="">
									<div class="horizontalBar" title="29.41%" value="Razorfins"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/razorfins-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.41%">Razorfins</span-->
									</div>

									<div class="horizontalBar" title="29.41%" value="Ironbacks"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ironbacks-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="29.41%">Ironbacks</span-->
									</div>

									<div class="horizontalBar" title="19.61%" value="Plundercrabs" desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/plundercrabs-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="19.61%">Plundercrabs</span-->
									</div>

									<div class="horizontalBar" title="21.57%" value="Ocklepods"    desc="percent of players who picked this brawler" style="width:0%;text-align:center;">
										<img src="resources/brawlers/ocklepods-thumbnail.png" style="text-align:center;"></img>
										<!--span class="horizontalLabel" title="21.57%">Ocklepods</span-->
									</div>
								</div>

							</div>
										</div>
		</div>
		<div class="subsettings">
		</div>
	</div>
</body>
</html>