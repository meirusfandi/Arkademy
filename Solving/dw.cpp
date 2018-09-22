#include <bits/stdc++.h>
using namespace std;
int main(){
	string dw 	= "DW";
	string space= "  ";

	for (int i=0; i<6; i++){
		for (int j=0; j<12; j++){
			if (j==0 || j==5 || j==11){
				cout<<dw;
			} else if (j == 4){
				cout<<space;
			} else if (j==1){
				if (i==0 || i==5){
					cout<<dw;
				} else {
					cout<<space;
				}
			} else if (j == 2){
				if (i==1 || i==4){
					cout<<dw;
				} else {
					cout<<space;
				}
			} else if (j == 3){
				if (i==2 || i==3){
					cout<<dw;
				} else {
					cout<<space;
				}
			} else if (j==6 || j==10){
				if (i==4){
					cout<<dw;
				} else {
					cout<<space;
				}
			} else if (j==7 || j==9){
				if (i==3){
					cout<<dw;
				} else {
					cout<<space;
				}
			} else if (j==8){
				if (i==3 || i==2){
					cout<<dw;
				} else {
					cout<<space;
				}
			}
		}
		cout<<endl;
	}
}