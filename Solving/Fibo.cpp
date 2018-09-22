#include <bits/stdc++.h>
using namespace std;

int Fibo[1000];

void fibo(int x){
	if (x == 0 || x == 1){
		cout<<Fibo[x]<<", ";
	} else {
		Fibo[x] = Fibo[x-1] + Fibo[x-2];
		cout<<Fibo[x]<<", ";
	}
}

int main() {
	int row, column;
	
	Fibo[0] = 0;
	Fibo[1] = 1;
	
	cin>>column;
	cin>>row;
	
	int count = 0;
	
	for (int i=0; i<row; i++){
		for (int j=0; j<column; j++){
			fibo(count);
			count++;
		}
		cout<<endl;
	}
	
	return 0;
}
