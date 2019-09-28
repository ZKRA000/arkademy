<h3>Cara Menjalankan Aplikasi</h3>

<h4>1.php</h4>

nama function <b><i>json_response(array)</b></i> dengan parameter array object

function langsung meng 'echo' hasil tanpa menuliskan syntax 'echo'

<h4>2.php</h4>

nama function pertama <b><i>is_username_valid(username)</i></b> dengan parameter string

string username harus berjumlah 6 digit berisi huruf kecil dan besar dan tidak boleh berisi angka atau symbol

jika string parameter tberisi angka/symbol misal (joko89,resa67,dani$9) maka akan return "false"

<i>misal</i>

is_username_valid('tito879') -> false <br>
is_username_valid('tito') -> true

nama function kedua <b><i>is_password_valid(password)</b></i> dengan parameter string 

string username harus berjumlah 5-10 digit berisi huruf kecil,besar,symbol dan didahului oleh angka 7 misal (7ahmA@d,r3ndY6@)

jika string parameternya tidak lengkap seperti di atas maka akan return "false"

<i>misal</i>

is_password_valid(7$dindaA) -> true <br>
is_username_valid(tito879) -> false


<h4>3.php</h4>
 
nama function <b><i>sortNumber(number)</i></b> dengan parameter string berisi number (boleh pakai nomor saja)

jika string parameter tidak berisi angka misal (joko,resa,dani) maka akan muncul error "no number found in parameter !"

tapi jika string parameter berisi angka misal (resa46,tito879) maka function akan megurutkan angka yang terdapat pada parameter

<i>misal</i>

sortNumber('tito879') -> 789 <br>
sortNumber('resa64') -> 64


<h4>4.php</h4>
 
nama function <b><i>thirdHighest(array_number)</i></b> dengan parameter array berisi number dan minimal harus berisi 3 angka / 3 index

jika jumlah value dalam array kurang dari 3 misal ([1,3]) maka akan muncul error 'Minimal array length is 3!'

dan jika jumlah value bukan array misal ("string",123) maka akan muncul error 'Parameter should be an array!'

fungsi dari function ini adalah meng output kan angka terbesar urutan ke 3

<i>misal</i>

thirdHighest([0,'a',4,5]) -> 5 <br>
thirdHighest([0,'a',-1,1]) -> 1


<h4>5.php</h4>

nama function <b><i>countChar(string,character)</i></b> berisi 2 parameter 

parameter pertama adalah string biasa misal ("berbelanja ke pasar","pergi membeli baju")

paramater kedua adalah character yang kita cari di dalam paramter pertama

fungsi dari function ini adalah meng output kan jumlah character yang ada dalam string

<i>misal</i>

countChar("berbelanja ke pasar","a") -> 4 <br>
countChar("berbelanja ke pasar","r") -> 2


<h4>web statis</h4>

web statis bisa dijalankan secara lokal tanpa database silahkan download file - filenya di folder <b>web_statis</b>

<h4>web dinamis</h4>

untuk menjalankan web dinamis , anda harus mendwonload file database pada folder database dan import ke phpmyadmin lokal anda

setting password dan username database ada pada file <b>connect.php</b> di dalam folder <b>web_dinamis</b>


