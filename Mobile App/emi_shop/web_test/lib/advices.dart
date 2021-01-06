import 'package:flutter/material.dart';
import 'main.dart';

class Advice extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Advices'),
      ),
      body: ListView(
        padding: EdgeInsets.all(16),
        children: <Widget>[
          Text('here the content extracted from our website:',),

        ],
      ),
      floatingActionButton: FloatingActionButton(
        child: Icon(Icons.home),
        onPressed: () => Navigator.pop(context),
      ),
    );
  }
}
