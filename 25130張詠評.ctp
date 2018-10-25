#include <iostream>
using namespace std;
int main() {
   int money;
  cout<<("How much maney do you have!");
  cin>>money;
if(money>=50){
  cout<< money/50<<"個50\n";
}
if(money>=10){
  cout<<money%50/10<<"個10\n";
}
if(money>=5){
  cout<<money%50%10/5<<"個5\n";
}
if(money>=1){
  cout<<money%50%10%5/1<<"個1\n";
}
}
