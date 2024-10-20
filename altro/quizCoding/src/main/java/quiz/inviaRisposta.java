/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package quiz;

import java.io.IOException;
import java.io.PrintWriter;
import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;

import org.json.JSONObject;

import alexf1789.quizcoding.Database;
import java.sql.SQLException;

/**
 *
 * @author Alessandro
 */
@WebServlet(name = "inviaRisposta", urlPatterns = {"/inviaRisposta"})
public class inviaRisposta extends HttpServlet {

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        // inviamo un JSON di errore di input
        
        JSONObject risposta = new JSONObject();
        risposta.put("type", "KO");
        risposta.put("message","ERRIN");
        
        PrintWriter out = response.getWriter();
        
        response.setContentType("application/json");
        out.print(risposta.toString());
        
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        JSONObject exit = new JSONObject();
        String risposta = request.getParameter("data");
        PrintWriter out = response.getWriter();
        response.setContentType("application/json");
        
        if(risposta != null) {
        
            try {

                Database db = new Database();
                boolean esito = db.inserisciRisposta(risposta);

                db.chiudiConnessione();
                
                if(esito) {
                    // la riga è stata inserita correttamente
                    
                    exit.put("type","OK");

                    out.print(exit.toString());
                    
                } else {
                    exit.put("type","KO");
                    exit.put("message","ERRDB");
            
                    out.print(exit.toString());
                }

            } catch(SQLException | ClassNotFoundException errore) {
                System.out.println("Errore! "+errore.getMessage());
                
                exit.put("type","KO");
                exit.put("message","ERRINT");

                out.print(exit.toString());
            }
            
        } else {
            
            // stampiamo all'utente un errore di input
            
            exit.put("type","KO");
            exit.put("message","ERRIN");
            
            out.print(exit.toString());
            
        }
        
    }

}
