<h3>Cara Menjalankan Aplikasi</h3>

<h4>1.php</h4>

nama function <b><i>json_response(array)</b></i> dengan parameter array object

function langsung meng 'echo' hasil tanpa menuliskan syntax 'echo'

<h4>2.php</h4>

nama function pertama <b><i>is_username_valid(username)</i></b> dengan parameter string

string username harus berjumlah 6 digit berisi huruf kecil dan besar dan tidak boleh berisi angka atau symbol

jika string parameter tberisi angka/symbol misal (joko89,resa67,dani$9) maka akan return "false"

function langsung meng 'echo' hasil tanpa menuliskan syntax 'echo'

nama function kedua <b><i>is_password_valid(password)</b></i> dengan parameter string 

string username harus berjumlah 5-10 digit berisi huruf kecil,besar,symbol dan didahului oleh angka 7 misal (7ahmA@d,r3ndY6@)

jika string parameternya tidak lengkap seperti di atas maka akan return "false"

function langsung meng 'echo' hasil tanpa menuliskan syntax 'echo'

<h4>3.php</h4>
 
nama function pertama <b><i>sortNumber(number)</i></b> dengan parameter string berisi number (boleh pakai nomor saja)

jika string parameter tidak berisi angka misal (joko,resa,dani) maka akan muncul error "no number found in parameter !"

tapi jika string parameter berisi angka misal (resa46,tito879) maka function akan megurutkan angka yang terdapat pada parameter dan meng echo nya misal 'resa46' => '46' ,'tito'879' => '789'

function langsung meng 'echo' hasil tanpa menuliskan syntax 'echo'

