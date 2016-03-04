package ad325.threads;
/**
 * @author Joe McLaughlin
 * @date 3.2.16
 * @
 **/


/**
 * A class that creates 3 desks, then serves customers at each one in order.
 *
 **/
public class MyServiceDesk extends ServiceDeskBase
{
	//creates a help desk for the customers
	static ServiceDesk help = new MyServiceDesk();

	//creates a thread for customer 1
	static Thread thread1  = new Thread(){
		public void run(){
			Customer one = new Customer('*');
			help.desk1(one);
			help.desk2(one);
			help.desk3(one);
		}
	};

	//creates a thread for customer 2
	static Thread thread2 = new Thread(){ 
		public void run(){
			Customer two = new Customer('&');
			help.desk2(two);
			help.desk1(two);
			help.desk3(two);
		}
	};

	//creates a thread for customer 3
	static Thread thread3 = new Thread(){
		public void run(){
			Customer three = new Customer('@');
			help.desk3(three);
			help.desk2(three);
			help.desk1(three);
		}
	};

	//main method
	public static void main(String[] args){
		thread1.start();
		thread2.start();
		thread3.start();
	}

}//end class
