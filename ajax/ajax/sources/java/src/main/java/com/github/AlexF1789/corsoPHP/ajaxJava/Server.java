package com.github.AlexF1789.corsoPHP.ajaxJava;

import org.json.JSONObject;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.CrossOrigin;

@RestController
public class Server {

    @RequestMapping(value="/getLibri", method=RequestMethod.GET, produces="application/json")
	@CrossOrigin(origins = "*")
    public String getLibri(@RequestParam(name="limit") int limit, @RequestParam(name="offset") int offset) {
        JSONObject risposta = new JSONObject();

        if(limit < 0 || limit > 50)
            limit = 50;

        if(offset < 0)
            offset = 0;

        try {
            Database db = new Database();
            risposta.put("data", db.getLibri(limit, offset));
            risposta.put("limit", limit);
            risposta.put("offset", offset);
            risposta.put("esito", true);
            db.chiudiConnessione();
        } catch(Exception e) {
            risposta.put("esito", false);
            risposta.put("messaggio", e.getMessage());
        }

        return risposta.toString();
    }

}
