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
			//try{thread1.join();}catch(InterruptedException e){}
			//try{Thread.sleep(9000);}
			//catch(InterruptedException e){}
			help.desk2(one);
			//try{thread1.join();}catch(InterruptedException e){}
			//try{Thread.sleep(9000);}
                        //catch(InterruptedException e){}
			help.desk3(one);
		}
	};

	//creates a thread for customer 2
	static Thread thread2 = new Thread(){ 
		public void run(){
			Customer two = new Customer('&');
			help.desk2(two);
			//try{thread2.join();}catch(InterruptedException e){}

			//try{Thread.sleep(9000);}
			//catch(InterruptedException e){}
			help.desk1(two);
			//try{thread2.join();}catch(InterruptedException e){}
			//try{Thread.sleep(9000);}
                        //catch(InterruptedException e){}
			help.desk3(two);
		}
	};

	//creates a thread for customer 3
	static Thread thread3 = new Thread(){
		public void run(){
			Customer three = new Customer('@');
			help.desk3(three);
			//try{thread3.join();}catch(InterruptedException e){}

			//try{Thread.sleep(9000);}
                        //catch(InterruptedException e){}
			help.desk2(three);
                        //try{thread3.join();}catch(InterruptedException e){}
			//try{Thread.sleep(9000);}
                        //catch(InterruptedException e){}
			help.desk1(three);
		}
	};


	@Override
	public void desk1(Customer c){
		//enqueue1(c);
		enqueue1(c);
		enqueue2(c);
		enqueue3(c);
		process1(c);
	}


	@Override
	public void desk2(Customer c){
		enqueue2(c);
		//process2(c);

		enqueue1(c);
                //enqueue2(c);
                enqueue3(c);
                process2(c);
	}

	@Override
	public void desk3(Customer c){
		/*enqueue1(c);
                enqueue2(c);
                enqueue3(c);
                process1(c);*/
		enqueue3(c);
		enqueue2(c);
		enqueue1(c);
		process3(c);
	}


	//main method
	public static void main(String[] args){
		thread1.start();
		//try{thread1.join();}catch(InterruptedException e){}
		thread2.start();
		//try{thread2.join();}catch(InterruptedException e){}
		thread3.start();
		//try{thread3.join();}catch(InterruptedException e){}
	}

}//end class

