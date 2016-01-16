package UserLogControl;
import java.io.BufferedWriter;
/**
 * @author Eric Le Fort
 * @version 1.0
 */
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.InputMismatchException;
import java.util.Scanner;

/**
 * @author Eric Le Fort
 * @version 1.0
 * 
 * File Format:
 * numUsers
 * token \t username \t password \t timeStamp
 */
public class UserControl implements Runnable{
	private File file;

	public UserControl(String fileName){
		file = new File(fileName);
	}//Constructor

	@Override
	public void run(){
		long downTime = (long)3.6E6;			//Waits for 1 hour.

		while(true){
			try{
				Thread.sleep(downTime);
				updateUsers();
			}catch(InterruptedException ie){ System.out.println("Thread interrupted"); }
		}

	}//run()

	private void updateUsers() throws InputMismatchException{
		String[] lines = null;

		try{
			Scanner in = new Scanner(new FileReader(file));
			lines = new String[in.nextInt()];
			for(int i = 0; i < lines.length; i++){
				//TODO Read in line if the time is acceptable,
				//TODO if expired, delete,
				//TODO if lowest, update time.
			}
			in.close();
		}catch(FileNotFoundException fnfe){
			System.out.println("File: " + file.getPath() + " not found");
		}catch(InputMismatchException ime){
			ime.getMessage();
		}

		writeFile(lines);
	}//updateUsers()

	/**
	 * Overwrites a previous file using the given data.
	 * @param contents
	 */
	private void writeFile(String[] contents){
		try{
			BufferedWriter writer = new BufferedWriter(new FileWriter(file));
			for(int i = 0; i < contents.length; i++){
				writer.write(contents[i]);
			}
			writer.close();
			System.out.println(file.toString() + " successfully written.");
		}catch(IOException ioe){
			ioe.getMessage();
		}

	}//writeFile()

}//UserControl
