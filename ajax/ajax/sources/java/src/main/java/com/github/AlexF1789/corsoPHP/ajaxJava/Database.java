package com.github.AlexF1789.corsoPHP.ajaxJava;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import org.json.JSONArray;
import org.json.JSONObject;

public class Database {

    private Connection db;

    public Database() throws SQLException, ClassNotFoundException {
        Class.forName("org.mariadb.jdbc.Driver");
        this.db = DriverManager.getConnection(
            "jdbc:mariadb://localhost:3306/studente",
            "studente", "studente"
        );
    }

    public JSONArray getLibri(int limit, int offset) throws SQLException {
        JSONArray risposta = new JSONArray();
        JSONObject record;

        String[] campi = {"ID", "titolo", "autore", "annoPubblicazione"};

        PreparedStatement query = this.db.prepareStatement("SELECT * FROM libri LIMIT ? OFFSET ?");
        query.setInt(1, limit);
        query.setInt(2, offset);

        ResultSet risultatoQuery = query.executeQuery();

        while(risultatoQuery.next()) {
            record = new JSONObject();

            for(String campo : campi)
                record.put(campo, risultatoQuery.getString(campo));

            risposta.put(record);
        }

        return risposta;
    }

    public void chiudiConnessione() throws SQLException {
        this.db.close();
    }

}
