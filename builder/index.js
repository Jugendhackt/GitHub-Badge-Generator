// * VARIABLES * //
var genurl = "https://jhbadge.de/"; 			// URL of the generator

var types = [                       			// Types of Badges (names) 
	"by-alpacas",
	"created-for",
	"standard",
	"started-at",
	"view-presentation"
];
var events = [                      			// List of Events and Abbreviations
	{
		name: "Berlin",
		abbr: "ber"
	},
	{
		name: "Frankfurt",
		abbr: "ffm"
	},
	{
		name: "Halle",
		abbr: "hal"
	},
	{
		name: "Hamburg",
		abbr: "hh"
	},
	{
		name: "Heidelberg",
		abbr: "hd"
	},
	{
		name: "Köln",
		abbr: "cgn"
	},
	{
		name: "MV | Rostock",
		abbr: "mv"
	},
	{
		name: "Ulm",
		abbr: "ulm"
	},
	{
		name: "Österreich",
		abbr: "at"
	},
	{
		name: "Schweiz",
		abbr: "ch"
	},
	{
		name: "Asia",
		abbr: "asia"
	},
	{
		name: "Remote",
		abbr: "rem"
	},
];

var typeSelected = "";              			// Type of Badge selected (part of types array)
var eventSelected = "ber";                      // Event selected (abbreviation)
var yearSelected = new Date().getFullYear();    // Year selected (initialises with current year)


// * INIT * //
// Add the JugendHackt events to the event selector 
events.forEach(evt => {
	document.getElementById("events").innerHTML += `
		<div id="event-${evt.abbr}" onclick="selectEvent('${evt.abbr}')">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="90%" viewBox="0 0 11 11" id="jh_logo" shape-rendering="crispEdges" event="${evt.abbr}">
				<g id="face">
					<g id="eyes">
					<rect id="left_eye" x="2" y="6" width="1" height="1" ></rect>
					<rect id="right_eye" x="8" y="6" width="1" height="1" ></rect>
					</g>
					<polygon id="mouth"
					points="4,7 4,9 7,9 7,7 6,7 6,8 5,8 5,7" ></polygon>
				</g>
				<g id="head">
					<polygon id="ears"
					points="1,0 3,0 3,1 4,1 4,2 7,2 7,1 8,1 8,0 10,0 10,1 11,1 11,5 9,5 9,4 2,4 2,5 0,5 0,1 1,1" ></polygon>
					<polygon id="beard"
					points="0,5 0,9 1,9 1,10 2,10 2,11 9,11 9,10 10,10 10,9 11,9 11,5 10,5 10,8 9,8 9,9 8,9 8,10 3,10 3,9 2,9 2,8 1,8 1,5" ></polygon>
				</g>
			</svg>
			<p>${evt.name}</p>
		</div>`;
});

// Fill HTML Elements with standard values / select standard selections
document.getElementById("badges-standard").setAttribute("selected", "true");
document.getElementById("event-ber").setAttribute("selected", "true");
document.getElementById("year").value = yearSelected;

// Refresh the Preview with the new variables
refreshIFrame();


// * FUNCTIONS * //
// Onclick event for all type select divs
function selectType(abbr) {
	if(abbr != "standard") { 	// If standard, leave abbr empty
		typeSelected = abbr;	// Else, save the selection
	}
	else {
		typeSelected = "";
	}
	types.forEach(type => {		// remove all selected borders
		document.getElementById("badges-"+type).setAttribute("selected", "false");
	});
	document.getElementById("badges-"+abbr).setAttribute("selected", "true");	// add a selected border to the clicked on element

	refreshIFrame();	// Refresh the preview with the new variables
}

// Onclick event for all event select divs
function selectEvent(abbr) {
	eventSelected = abbr;	// Save the event selection
	events.forEach(evt => {	// remove all selected borders
		document.getElementById("event-"+evt.abbr).setAttribute("selected", "false");
	});
	document.getElementById("event-"+abbr).setAttribute("selected", "true");	// add a selected border to the clicked on element

	refreshIFrame();	// Refresh the preview with the new variables
}

// Onchange and oninput event for the year select input
function selectYear() {
	yearSelected = document.getElementById("year").value;	// Save the new year
	refreshIFrame();	// Refresh the preview with the new variables
}

// Refreshes the content of the preview iFrame with the current variables. Also refreshes the 
function refreshIFrame() {
	var url = "";
	if(typeSelected == "") {	// If standard, don't add a type GET Variable for simplicity
		url = genurl + "?evt=" + eventSelected + "&year=" + yearSelected;
	}
	else {
		url = genurl + "?type=" + typeSelected + "&evt=" + eventSelected + "&year=" + yearSelected;
	}

	// Fill the HTML attributes with the new URL (in various forms)
	document.getElementById("preview").src = url;
	document.getElementById("url").innerHTML = '<a href="' + url + '">'+url+'</a>';
	document.getElementById("md").innerText = "![](" + url + ")";
}