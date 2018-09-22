#include <bits/stdc++.h>
using namespace std;

long A[7] = {50000, 20000, 10000, 5000, 2000, 1000, 500};

void kembalian(long kembali){
	int jumlah = 0;
	if (kembali > 0){
		
		if (kembali >= A[0]){
			jumlah = kembali / A[0];
			
			kembali = kembali - (jumlah * A[0]);
			
			cout<<"- "<<jumlah<<" pecahan "<<A[0]<<endl;
		} else if (kembali >= A[1]) {
			jumlah = kembali / A[1];
			
			kembali = kembali - (jumlah * A[1]);
			
			cout<<"- "<<jumlah<<" pecahan "<<A[1]<<endl;
		} else if (kembali >= A[2]) {
			jumlah = kembali / A[2];
			
			kembali = kembali - (jumlah * A[2]);
			
			cout<<"- "<<jumlah<<" pecahan "<<A[2]<<endl;
		} else if (kembali >= A[3]) {
			jumlah = kembali / A[3];
			
			kembali = kembali - (jumlah * A[3]);
			
			cout<<"- "<<jumlah<<" pecahan "<<A[3]<<endl;
		} else if (kembali >= A[4]) {
			jumlah = kembali / A[4];
			
			kembali = kembali - (jumlah * A[4]);
			
			cout<<"- "<<jumlah<<" pecahan "<<A[4]<<endl;
		} else if (kembali >= A[5]) {
			jumlah = kembali / A[5];
			
			kembali = kembali - (jumlah * A[5]);
			
			cout<<"- "<<jumlah<<" pecahan "<<A[5]<<endl;
		} else if (kembali >= A[6]) {
			jumlah = kembali / A[6];
			
			kembali = kembali - (jumlah * A[6]);
			
			cout<<"- "<<jumlah<<" pecahan "<<A[6]<<endl;
		}
		
		kembalian(kembali);
	}
}

int main() {
	long total_belanja, uang, kembali;
	cin>>total_belanja;
	cin>>uang;
	kembali = uang - total_belanja;
	
	kembalian(kembali);
	
	return 0;
}
