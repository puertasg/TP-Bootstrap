function invalidForm()
{
  url = $(location).attr("href");
  args = url.split("?");
  console.log(args);

  if(args[1]=="errors")
  {
    console.log("error");
    $('#inputNom').get(0).setCustomValidity('Le nom est obligatoire.');
  }
}