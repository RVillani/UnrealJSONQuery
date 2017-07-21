# JSONQuery for Unreal
Adds nodes for Blueprint communication with servers using JSON.

## Usage

### Installation

1. Close the Project.
1. Create a folder named **Plugins** in your project folder (if there isn't one).
1. Copy the folder **JSONQuery** into your **Plugins** folder.
1. Launch the project.

### Nodes

#### To send data to a server/web-service

1. Use the ```CreateJSON``` node to get a new JSON object.
1. Pull a line from this node and add the Key/Values you want with the ```AddX``` nodes.
1. **Always pull the next line from the last Add node.** If you pull the line from the CreateJSON node everytime, you'll be adding each Key/Value to a different JSON object.
1. After the last Add node, pull a line from it's Return Value and call ```PostJSONRequest``` with the URL.
1. If you want to know when the request was completed, pull another line and call ```BindEventToOnGetResult```.

#### To get data from a server/web-service

1. Use the ```GetJSONRequest``` node with the URL.
1. Pull a line from this node's Return Value and call ```BindEventToOnGetResult```.
1. From the resulting event you can get the answer from the server using the JSON variable.

### Examples

In the [releases](https://github.com/RVillani/UnrealJSONQuery/releases) ZIP files you'll find a **Samples** folder with an advanced Blueprint example as well as a PHP script for reading the JSON in the server.

## Troubleshooting

The plugin will always display the received answer from the server on the **Output Log** window. Even if it's not a valid JSON, in which case it'll be highlighted in red.  
*If you don't have the Output Log window opened, find it on **Window > Developer Tools > Output Log**.*
