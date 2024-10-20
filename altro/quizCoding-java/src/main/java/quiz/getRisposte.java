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
@WebServlet(name = "getRisposte", urlPatterns = {"/getRisposte"})
public class getRisposte extends HttpServlet {

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
        
        JSONObject risposta = new JSONObject();
        PrintWriter out = response.getWriter();
        response.setContentType("application/json");
        
        risposta.put("type","KO");
        risposta.put("message", "ERRIN");
        
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
        PrintWriter out = response.getWriter();
        response.setContentType("application/json");
        
        try {
            
            Database db = new Database();
            String risposta = db.getRisposte();
            db.chiudiConnessione();
            
            if(risposta != null) {
                exit.put("type","OK");
                exit.put("data",risposta);
                
                out.print(exit.toString());
            } else {
                exit.put("type","KO");
                exit.put("message","ERRDB");
            }
            
        } catch(SQLException | ClassNotFoundException errore) {
            System.out.println("Errore! "+errore.getMessage());
            
            exit.put("type","KO");
            exit.put("message","ERRINT");
            
            out.print(exit.toString());
        }
    }

}
