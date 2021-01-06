import 'package:flutter/material.dart';
import 'package:webview_flutter/webview_flutter.dart';
import 'main.dart';

class Advice extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('EMI Shop'),
      ),
      body: Container(
        child: _buildWebView(),
      ),
      floatingActionButton: FloatingActionButton(
        child: Icon(Icons.home),
        onPressed: () => Navigator.pop(context),
      ),
    );
  }
  Widget _buildWebView(){
    return WebView(
      javascriptMode: JavascriptMode.unrestricted,
      initialUrl: "https://e-m-i-shop.000webhostapp.com",
    );
  }
}
