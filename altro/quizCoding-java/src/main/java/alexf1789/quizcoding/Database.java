/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package alexf1789.quizcoding;

import java.sql.*;

/**
 *
 * @author Alessandro
 */
public class Database {
    
    private Connection db;
    
    public Database() throws SQLException, ClassNotFoundException {
        Class.forName("org.mariadb.jdbc.Driver");
        this.db = DriverManager.getConnection(
                "jdbc:mariadb://localhost:3306/java",
                "java","java"
        );
    }
    
    public boolean inserisciRisposta(String risposta) throws SQLException {
        PreparedStatement query = this.db.prepareStatement("INSERT INTO risposte(risposta) VALUES (?)");
        query.setString(1,risposta);
        
        int righeInserite = query.executeUpdate();
        
        return righeInserite > 0;
    }    
    
    public String getRisposte() throws SQLException {
        String stringaRisposte = "";
        
        PreparedStatement query = this.db.prepareStatement("SELECT risposta FROM risposte");
        ResultSet risposta = query.executeQuery();
        
        int numRighe = 0;
        while(risposta.next())
            numRighe++;
        
        risposta.beforeFirst();
        
        int contaRighe = 0;
        while(risposta.next()) {
            contaRighe++;
            
            if(contaRighe == 1)
                stringaRisposte += '[';
            
            stringaRisposte += risposta.getString("risposta");
            
            if(contaRighe < numRighe)
                stringaRisposte += ',';
            else
                stringaRisposte += ']';
        }
        
        return stringaRisposte;
    }
    
    public void chiudiConnessione() throws SQLException {
        this.db.close();
    }
    
}
