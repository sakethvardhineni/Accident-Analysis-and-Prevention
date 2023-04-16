# Accident Analysis And Prevention
## Required Environment
  **Operating System**: Ubuntu 22.04, Linux Amazon 2023​  
  **Programming Languages**: Python, PHP, ShellScript, HTML, CSS​  
  **Database**: MySQL​  
  **Packages**: Numpy, matplotlib, Pandas, joblib, flask​  
  **Software Requirements**: Splunk, Splunk Global Forwarder, and OSSEC.​  
  **Other tools**: Git bash​  
  **Editor**: Visual Studio Code​  
  **Code Management**: Github​  
    
## Adopted libraries  
  1. pip
  2. numpy
  3. git
  4. joblib
  5. pandas
  6. sklearn
  7. matplotlib.pyplot
  8. flask
  9. python requestor
## Flow of Execution
  * launch EC2 servers.
  * Allow the traffic to the ec2 servers.
  * SSH to the EC2 servers.
  * Train the python model.
  * launch the wesite using main.py.
  * Launch the apache2.
  * Start the OSSEC.
  * Start the mysql.
  * Access the Signup Page.
  * Access the login page.
  * Access the home page.
  * Access the main website.
  * Inject the SQL Injections frmo the login page.
  * Mitigate the SQL injections.
  * Start the DDOS attack using the python script.
  * Mitigate the DDOS attack using the splunk alerting machanism and shel script from the server.
  * Update the NACL entries.
  * Send the notifications to the admins based on the reports.
  * Kill the PID of the main.py

 ## Commands to run the code  
 ```
 cd /home/ec2-server/anvesh/
 noohup python main.py &  
 service mysql start
 service ossec-control start
 service apache2 start
 service splunk start
 service splunkforwarder start  
 ./script.sh
 ```  
 ## Issues experiencing and Solutions  
Issues:  
Blocking IP address causing DDOS attack:​
Faced an issue to block the IP address from the Splunk. We used AWSCLI concept to overcome this issue.​
Facing the resources issues with the main.py execution.​
Getting the all logs into the Splunk server and maintain.​

Solutions:
Manually get the ip from the Splunk UI.
Using AWSCLI we managed the NACL entries and Security groups.
Launched the different type of EC2 machine to maintain the resource.

Future Developement:
For the future development, We can mitigate more attacks and also improve the accuracy of the model using Random Forest Classifier.​
Also, we can improve the alerting mechanisms with appropriate information to help the investigation of the attacks.​
We can improve the alerting script to block the exact IP of the attacker.​

