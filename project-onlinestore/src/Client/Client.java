package Client;

import java.io.File;
import java.io.InputStream;
import java.net.URL;

import org.apache.commons.httpclient.HttpClient;
import org.apache.commons.httpclient.methods.FileRequestEntity;
import org.apache.commons.httpclient.methods.PostMethod;
import org.apache.commons.httpclient.methods.PutMethod;
import org.apache.commons.httpclient.methods.RequestEntity;
import org.apache.cxf.helpers.IOUtils;
import org.apache.cxf.io.CachedOutputStream;
import org.apache.cxf.resource.URIResolver;
import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;

public class Client {
	static final Logger logger = LogManager.getLogger(Client.class);

	static final String GET_INFO = "http://localhost:8080/assign2-restfulservices/rest/customerservice/customers/71";

	static final String UPDATE_INFO = "http://localhost:8080/assign2-restfulservices/rest/customerservice/customer/71";

	static final String ADD_INFO = "http://localhost:8080/assign2-restfulservices/rest/customerservice/customers";

	public static void main(String args[]) throws Exception {

		// Send HTTP GET request to query customer info
		logger.debug("Sent HTTP GET request to query stock info");
		URL url = new URL(GET_INFO);
		InputStream in = url.openStream();
		logger.debug(getStringFromInputStream(in));

		// Send HTTP PUT request to update stock info
		logger.debug("\n");
		logger.debug("Sent HTTP PUT request to update stock info");
		Client client = new Client();
		String inputFile = client.getClass().getResource("/update_customer.xml").getFile();
		URIResolver resolver = new URIResolver(inputFile);
		File input = new File(resolver.getURI());
		PutMethod put = new PutMethod(UPDATE_INFO);
		RequestEntity entity = new FileRequestEntity(input, "text/xml; charset=ISO-8859-1");
		put.setRequestEntity(entity);
		HttpClient httpclient = new HttpClient();

		try {
			int result = httpclient.executeMethod(put);
			logger.debug("Response status code: " + result);
			logger.debug("Response body: ");
			logger.debug("aa::" + put.getResponseBodyAsString());
		} finally {
			// Release current connection to the connection pool once you are
			// done
			put.releaseConnection();
		}

		//Add Customer

		// Sent HTTP POST request to add customer
		logger.debug("\n");
		logger.debug("Sent HTTP POST request to add stock");
		inputFile = client.getClass().getResource("/add_customer.xml").getFile();
		resolver = new URIResolver(inputFile);
		input = new File(resolver.getURI());
		PostMethod post = new PostMethod(ADD_INFO);
		// post.addRequestHeader("Accept", "text/xml");
		entity = new FileRequestEntity(input, "text/xml; charset=ISO-8859-1");
		post.setRequestEntity(entity);
		httpclient = new HttpClient();

		try {
			int result = httpclient.executeMethod(post);
			logger.debug("Response status code: " + result);
			logger.debug("Response body: ");
			logger.debug(post.getResponseBodyAsString());
		} finally {
			// Release current connection to the connection pool once you are
			// done
			post.releaseConnection();
		}

		logger.debug("\n");
		System.exit(0);
	}

	private static String getStringFromInputStream(InputStream in) throws Exception {
		CachedOutputStream bos = new CachedOutputStream();
		IOUtils.copy(in, bos);
		in.close();
		bos.close();
		return bos.getOut().toString();
	}

}