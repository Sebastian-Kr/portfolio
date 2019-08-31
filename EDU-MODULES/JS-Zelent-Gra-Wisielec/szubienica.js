var haslo_gry="Na dobre i na złe"
haslo_gry = haslo_gry.toUpperCase(); /*zamiana na duże litery*/

var ile_bubli = 0;
var haslo1 = "";
var dlugosc_hasla = haslo_gry.length; /*pobieranie długości łańcucha*/

for (i=0; i<dlugosc_hasla; i++) /*wykreskowanie hasła*/
{
	if (haslo_gry.charAt(i)==" ") haslo1 = haslo1 + " ";
	else haslo1 = haslo1 + "-";
}

function wyswietl_haslo() /*wyświetlanie hasla zakreskowanego*/
{
	document.getElementById("haselko").innerHTML = haslo1;

}

window.onload = klawka; /*odpalanie funkcji przy załadowaniu strony*/

var litery = new Array(35); /*tablica elementów literowych*/

litery[0] = "A";
litery[1] = "Ą";
litery[2] = "B";
litery[3] = "C";
litery[4] = "Ć";
litery[5] = "D";
litery[6] = "E";
litery[7] = "Ę";
litery[8] = "F";
litery[9] = "G";
litery[10] = "H";
litery[11] = "I";
litery[12] = "J";
litery[13] = "K";
litery[14] = "L";
litery[15] = "Ł";
litery[16] = "M";
litery[17] = "N";
litery[18] = "Ń";
litery[19] = "O";
litery[20] = "Ó";
litery[21] = "P";
litery[22] = "Q";
litery[23] = "R";
litery[24] = "S";
litery[25] = "Ś";
litery[26] = "T";
litery[27] = "U";
litery[28] = "V";
litery[29] = "W";
litery[30] = "X";
litery[31] = "Y";
litery[32] = "Z";
litery[33] = "Ż";
litery[34] = "Ź";

function klawka()
{

var tresc_klawiatury = "";

for (i=0; i<=34; i++) /*generowanie div-ów dla klawiatury*/
{
	tresc_klawiatury = tresc_klawiatury + '<div class="literka" onclick="sprawdzanie('+i+')" id="li' + i + '">' + litery[i] + '</div>';
	if ((i+1)%7==0) tresc_klawiatury = tresc_klawiatury + '<div style="clear:both;"></div>'
}

document.getElementById("klawiatura").innerHTML = tresc_klawiatury; /*podmienianie treści HTML do klawiatury*/
wyswietl_haslo();

}



String.prototype.ustawZnak = function(miejsce, znak) /*funkcja zamieniajaca dany znak na inny w lancuchu*/
{
if (miejsce > this.length - 1) return this.toString(); /*zabezpieczenie żeby nie odwołoywać się do znaku, którego nie ma*/
else return this.substr(0, miejsce) +znak+ this.substr(miejsce + 1); 
/*podmiana litery= wyciągamy wszystkie znaki od zera + doklajamy zmienną znak + doklejamy pozostałe znaki*/

}


function sprawdzanie(num)/* sprawdzanie litera po literze hasła i odsłanianie litery*/
{

var jest = false;

	for(i=0; i<=dlugosc_hasla; i++) 
	{
		if (haslo_gry.charAt(i) == litery[num])
		{
			haslo1 = haslo1.ustawZnak(i, litery[num]);
			var jest = true;
		}
	}

	if (jest == true)
	{
		//zmiana litery na zielony
		var elem = "li"+num;
		document.getElementById(elem).style.background = "green";
		document.getElementById(elem).style.color = "darkgray";
		document.getElementById(elem).style.cursor = "default";

	wyswietl_haslo();


	}
	else
	{
		// zmiana litery na czerwony
		var elem = "li"+num;
		document.getElementById(elem).style.background = "red";
		document.getElementById(elem).style.color = "darkred";
		document.getElementById(elem).style.cursor = "default";
		 // wyłacza onclik - zamiaenia na pustą instrkukcję
		 document.getElementById(elem).setAttribute("onclick",";");

		// podmiana obrazka 
		ile_bubli = ile_bubli + 1;
		var sciezka = "img/s"+ile_bubli+".jpg";
        document.getElementById("grafika").innerHTML='<img src="'+sciezka+'">';
	}

	if (haslo_gry == haslo1)
	{
		// grafika wygranej i przeładowanie strony
		document.getElementById("klawiatura").innerHTML = '<div class="animated fadein"><img src="img/win.jpg"><br><br><span class="restart" onclick="location.reload()">GRAM JESZCZE RAZ > </span></div>'
	}

	if (ile_bubli >=9)
	{
		// grafika przegranej i przeładowanie strony
		document.getElementById("klawiatura").innerHTML = '<div class="animated fadein">WISISZ!!!<BR><img src="img/lose.jpg"><br><br><span class="restart" onclick="location.reload()">GRAM JESZCZE RAZ > </span></div>'
	}

}


