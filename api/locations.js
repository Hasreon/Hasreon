var fairfalcongate = {
    name:  "Fairfalcon Gate",
    North: "False",
    South: "False",
    East: "pathtofairfalcon",
    West: "fairfalconmainstreet",
    Description: "The gate leads out to a path which leads to a forest. Many merchants are by the gate, selling their wares. A path is to the East, The main street is to the West.",
    Buildings: []
};

var fairfalconmainstreet = {
    name: "Main Street",
    North: "fairfalconstreetnorth",
    South: "fairfalconstreetsouth",
    East: "fairfalcongate",
    West: "False",
    Description: "The Main street of Fairfalcon is quite small, but the sound it makes is deafening. The merchants are shouting, people are talking, musicians are playing, and the birds are singing. The gate is too the east.",
    Buildings: ['fairfalconinn','fairfalcongrocers','fairfalconblacksmith','fairfalcontownhall']
};

var fairfalconstreetnorth = {
  name: "Street to the North",
  North: "False",
  South: "fairfalconmainstreet",
  East: "False",
  West: "False",
  Description: "You step into a Quiet Residential Street. There is nothing of use here. The Main Street is to the south.",
  Buildings: []
};

var fairfalconstreetsouth = {
  name: "Street to the South",
  North: "fairfalconmainstreet",
  South: "False",
  East: "False",
  West: "False",
  Description: "You step into a Quiet Residential Street. There is nothing of use here. The Main Street is to the north.",
  Buildings: []
};

var fairfalconinn = {
  name: "Fairfalcon Inn",
  North: "False",
  South: "False",
  East: "fairfalconmainstreet",
  West: "False",
  Description: "The inn is warm and cozy. No time to rest though! There are workers cleaning the inn. You can hear the Main street outside, to the east.",
  Buildings: []
};

var fairfalconblacksmith = {
  name: "Fairfalcon Blacksmith",
  North: "False",
  South: "False",
  East: "fairfalconmainstreet",
  West: "False",
  Desciption: "The Blacksmith is out. You can see a single customer sitting on a bench, next to some form of metal beam that looks like it has just been cast",
  Buildings: ['Blacksmith']
}

var fairfalcongrocer = {
  name: "Fairfalcon Grocers",
  North: "False",
  South: "False",
  East: "fairfalconmainstreet",
  West: "False",
  Description: "The grocers shop is lively with customers haggling for the best prices. Brightly coloured fruit lines the counter. The exit is to the east.",
  Buildings: ['Grocer']
}

var fairfalcontownhall = {
  name: "Fairfalcon Town Hall",
  North: "False",
  South: "False",
  East: "False",
  West: "fairfalconmainstreet",
  Description: "The Town hall is a quiet building, and it stand tall, almost as high as the gate. It is furnished with expensive wooden furniture and floors. Chandeliers can be seen illuminating the hallways.",
  Buildings: ['Fairfalcon Mayor']
}

var pathtofairfalcon = {
    name: "Path to Fairfalcon",
    North: "False",
    South: "pathtofairfalconforest",
    East: "False",
    West: "fairfalcongate",
    Description: "You find yourself on a long, narrow, twisting path. The Village of Fairfalcon is to the west. A path is to the south",
    Buildings: []
};

var pathtofairfalconforest = {
  name: "Path to Fairfalcon Forest",
  North: "False",
  South: "fairfalconforest",
  East: "False",
  West: "pathtofairfalcon",
  Description: "You find yourself on a long and widing path into the forest. The forest is to the south.",
  Buildings: []
}

var fairfalconforest = {
  name: "Fairfalcon Forest",
  North: "pathtofairfalconforest",
  South: "False",
  East: "False",
  West: "caveentrance",
  Description: "You find yourself in a dense, overgrown forest. The grass is up to your knees and the trees obscure almost all light, However, you can make out a boulder on the west side. It is covered in vines and looks like it has been there for a long time.",
  Buildings: ['Boulder']
}

var caveentrance = {
    name: "Cave Entrance",
    North: "False",
    South: "False",
    East: "fairfalconforest",
    West: "cave",
    Description: "The Entrance to the cave has been left untouched for thousands of years. The Cave extends out to the west.",
    Buildings: []
}

var cave = {
    name: "Ancient Cave",
    North: "False",
    South: "False",
    East: "caveentrance",
    West: "False",
    Description: "The Cave is dimly lit by the sunlight streaming in through the entrance. In the center of this huge cave is a Pool, inhabited by what seems to be a large squid.",
    Buildings: ['Kraken']
};
