function changeDisplay()
{
  if (document.getElementById('type').value == 'meliruche')
  {
    document.getElementById('idMeliborne').style.display = "block";
    document.getElementById('idSigfox').style.display = "none";
  }
  else
  {
    document.getElementById('idMeliborne').style.display = "none";
    document.getElementById('idSigfox').style.display = "block";
  }
}
