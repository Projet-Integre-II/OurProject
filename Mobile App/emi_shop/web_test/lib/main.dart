
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'Main_page.dart';

void main() => runApp(EMI_SHOP());
/*
* BMI : Body Mass Index
* */
class EMI_SHOP extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      theme: ThemeData.dark().copyWith(
        scaffoldBackgroundColor: Color(0xff0a0e21),
        primaryColor: Color(0xff0a0e21),
      ),
      title: 'BMI Calculator',
      home: MyApp(),
    );
  }
}

/*
class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(

          backgroundColor: Colors.teal[900],
          body:

          SafeArea(

            child: ListView(
              children: <Widget>[
                Padding(
                  padding: const EdgeInsets.all(8.0),
                  child: Column(
                    // mainAxisAlignment: MainAxisAlignment.center,
                    children: <Widget>[
                      CircleAvatar(
                        ///widgets pour dessiner  une cercle sur l'image .
                        radius: 160,
                        backgroundImage: AssetImage(
                          //on fait  l'ajouter dans le fichier YAML
                          "images/EMI SHOP.png",
                        ),
                      ),
                      SizedBox(
                        height: 10,
                      ),
                      Text(
                        'EMI SHOP ',
                        style: TextStyle(
                          color: Color(0xffef3f7e),
                          letterSpacing: 2.5,
                          fontSize: 46.0,
                          fontStyle: FontStyle.italic,
                          fontWeight: FontWeight.w900,
                          fontFamily: 'Pacifico',
                        ),
                      ),
                      Padding(
                        padding: const EdgeInsets.all(60),
                        child: Text(
                          "Welcome to the new mobile application for shopping 😉",
                          style: TextStyle(
                            color: Colors.red.shade900,
                            letterSpacing: 2.5,
                            fontSize: 36.0,
                            fontStyle: FontStyle.italic,
                            fontWeight: FontWeight.w900,
                            fontFamily: 'Pacifico',
                          ),
                        ),
                      ),
                      Text(
                        'Develloped by :',
                        style: TextStyle(
                          color: Colors.blue[500],
                          letterSpacing: 2.5,
                          fontSize: 30.0,
                          fontStyle: FontStyle.italic,
                          //fontWeight: FontWeight.bold,
                          fontFamily: 'Modak',
                        ),
                      ),
                      SizedBox(
                        height: 10,
                        width: 250,
                        child: Divider(
                          color: Colors.amber,
                        ),
                      ),
                      Card(
                        child: ListTile(
                          leading: Icon(Icons.assignment_ind),
                          title: Text(
                            'EL OUAHABI REDA',
                            style: TextStyle(
                              color: Colors.black87,
                              fontSize: 20,
                              fontWeight: FontWeight.w900,
                              fontFamily: 'Pacifico',
                            ),
                          ),
                        ),
                      ),
                      Card(
                        child: ListTile(
                          leading: Icon(Icons.assignment_ind),
                          title: Text(
                            'BOUAOUDA ZAKARIA',
                            style: TextStyle(
                              color: Colors.black87,
                              fontSize: 20.0,
                              fontWeight: FontWeight.w900,
                              fontFamily: 'Pacifico',
                            ),
                          ),
                        ),
                      ),
                      Card(
                        child: ListTile(
                          leading: Icon(Icons.assignment_ind),
                          title: Text(
                            'FATIMA EZZAHRAE CHAHID',
                            style: TextStyle(
                              color: Colors.black87,
                              fontSize: 20,
                              fontWeight: FontWeight.w900,
                              fontFamily: 'Pacifico',
                            ),
                          ),
                        ),
                      ),
                      Card(
                        child: ListTile(
                          leading: Icon(Icons.assignment_ind),
                          title: Text(
                            'FATIMA EZZAHRAE EL ACHHAB',
                            style: TextStyle(
                              color: Colors.black87,
                              fontSize: 20,
                              fontWeight: FontWeight.w900,
                              fontFamily: 'Pacifico',
                            ),
                          ),
                        ),
                      ),

                    ],
                  ),
                ),
                FloatingActionButton(child: Icon(Icons.shopping_cart),
                  onPressed:()=> Navigator.push(context,MaterialPageRoute(builder: (context){
                    return Advice();
                  })),

                ),
              ],

            ),


          )),
      debugShowCheckedModeBanner: false,

    );

  }
}
*/
