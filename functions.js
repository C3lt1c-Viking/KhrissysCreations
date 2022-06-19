function westernButton()
{
  var w = document.getElementById("westernDiv");
  if (w.style.display === "none")
  {
    w.style.display = "block";
    document.getElementById("nerdyDiv").style.display = "none";
    document.getElementById("holidayDiv").style.display = "none";
  }
  else
  {
    w.style.display = "none";
  }
}

function nerdyButton()
{
  var n = document.getElementById("nerdyDiv");
  if (n.style.display === "none")
  {
    n.style.display = "block";
    document.getElementById("westernDiv").style.display = "none";
    document.getElementById("holidayDiv").style.display = "none";
  }
  else
  {
    n.style.display = "none";
  }
}

function holidayButton()
{
  var h = document.getElementById("holidayDiv");
  if (h.style.display === "none")
  {
    h.style.display = "block";
    document.getElementById("westernDiv").style.display = "none";
    document.getElementById("nerdyDiv").style.display = "none";
  }
  else
  {
    h.style.display = "none";
  }
}
