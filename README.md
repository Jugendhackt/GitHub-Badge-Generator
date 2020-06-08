# Jugend hackt GitHub Badge Generator
A simple PHP generator for svg GitHub Readme Badges for JugendHackt.

## Tutorial
The generator is available at https://jhbadge.de/.
By default it creates this Badge: ![Jugend hackt Badge](https://jhbadge.de/)

To select the specific event, add the evt GET-Variable to your URL.
Example: This URL (https://jhbadge.de/?evt=ffm) generates this Badge: ![Jugend hackt Frankfurt Badge](https://jhbadge.de/?evt=ffm)
Below you can find a complete list of events and abbreviations for them.

By default the generator will use the current year in the Badge. This is useful if you just want to download it.
If you want to reference it using the URL, like above, you should lock the year to prevent it from updating.
To do that, add the year GET-Variable to your URL.
Example: This URL (https://jhbadge.de/?evt=cgn&year=2017) generates this Badge: ![Jugend Hackt Frankfurt 2017 Badge](https://jhbadge.de/?evt=cgn&year=2017)

## Event List
These are the events the generator recognises:
* `ber` - Berlin
* `cgn` - Köln
* `ffm` - Frankfurt
* `hal` - Halle
* `hd` - Heidelbarg
* `hh` - Hamburg
* `mv` - Mecklenburg-Vorpommern
* `ulm` - Ulm

* `at` - Österreich
* `ch` - Schweiz
* `asia` - Asien

## Thank you
* ... Jugend hackt for the awesome events 
* ... @pascalboehler, for the idea
* ... everyone in Zulip for testing!
