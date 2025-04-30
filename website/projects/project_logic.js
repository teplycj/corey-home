/////////////////////////////////////////////////////////////////////////////////////////
//returns the active table
function getActiveTable(){
  var shiny_tabs = ["publicpool","beermap"]; //all of the different tabs to know which table needs to be updated
  for(var i=0; i<shiny_tabs.length; i++){
    if ( document.getElementById(shiny_tabs[i]).className.match(/(?:^|\s)active(?!\S)/) ){ //find the active tab to know which table to insert into
      return invenTabs[i];
    }
  }
}

/////////////////////////////////////////////////////////////////////////////////////////
//load the warehouse tab when the page is loaded
function loadActive(tabID){
  var shiny_tabs = ["publicpool","beermap"];
  var shiny_links = ["https://shiny.publicpooldashboard.com/publicPoolDemo/", "https://shiny.aslanbarcode.com/beerMap/"];

  var goodIndex = 0;
  for(var i = 0; i < shiny_tabs.length; i++) {
    if (tabID === shiny_tabs[i]) {
      goodIndex = i;
      break;
    }
  }
  document.getElementById('shiny_app_output').innerHTML = '<iframe src="'+ shiny_links[goodIndex] +'" width="100%" height="1200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
}

//////////////////////////////////////////////////////////////////////////////////////////
//update the highlighted inventory tab and change the table output
function changeClass(itemID){
  //console.log("Item id to change: ", itemID);
  if ( document.getElementById(itemID).className.match(/(?:^|\s)active(?!\S)/) ){ //check to see if the item is already active
    //do nothing!
  } else {
    var shiny_tabs = ["publicpool","beermap"]; //all of the different tabs to know which table needs to be updated
    var shiny_titles = ['Public Pool Demo', 'Beer Map - Aslan Brewing Co.'];
    var goodIndex = 0;
    for(var i=0; i<shiny_tabs.length; i++){
      if ( document.getElementById(shiny_tabs[i]).className.match(/(?:^|\s)active(?!\S)/) ){
        document.getElementById(shiny_tabs[i]).className = document.getElementById(shiny_tabs[i]).className.replace( /(?:^|\s)active(?!\S)/g , '' ); //this removes the active tag
        break;
      }
    }
    for(var j=0;j<shiny_tabs.length;j++){
      if(itemID===shiny_tabs[j]){
        goodIndex=j;
      }
    }
    document.getElementById(itemID).className += " active"; //add the active class to the newly clicked tab
    document.getElementById('shiny_header').innerHTML = shiny_titles[goodIndex];

    loadActive(itemID);
  }
}
