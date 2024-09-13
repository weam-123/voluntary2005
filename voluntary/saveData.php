<?php

$conn->close();

$using System;
$using System.Net;
$using System.Net.Mail;

class Program
{
    static void Main()
    {
        // Collect the name from your box, let's assume it's stored in a variable called 'name'
        string name = "John Doe";

        // Set up your Gmail SMTP credentials
        var smtpClient = new SmtpClient("smtp.gmail.com")
        {
            Port = 587,
            Credentials = new NetworkCredential("schoolsomayah@gmail.com", "Somaya.11"),
            EnableSsl = true,
        };

        // Prepare the email message
        var message = new MailMessage
        {
            From = new MailAddress("schoolsomayah@gmail.com"),
            Subject = "New Name Submission",
            Body = $"New name submitted: {name}"
        };
        message.To.Add("schoolsomayah@gmail.com"); // Change this to your email address

        // Send the email
        smtpClient.Send(message);
        Console.WriteLine("Email sent successfully.");
    }
}
?>

