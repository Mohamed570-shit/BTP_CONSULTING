<div style="font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif; color: #2b2b2b; line-height: 1.8; padding: 30px; max-width: 700px; margin: 25px auto; border-radius: 14px; background: #ffffff; box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #ff6200, #ff8c00); border-radius: 14px 14px 0 0;"></div>
    <h2 style="color: #ff6200; font-size: 24px; font-weight: 600; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
        <span style="font-size: 28px; transition: transform 0.2s ease;">📬</span>
        Nouveau Message de Contact
    </h2>

    <div style="padding: 0 5px;">
        <p style="margin-bottom: 12px; font-size: 16px; display: flex; align-items: center; gap: 10px;">
            <strong style="color: #ff6200; font-weight: 600; min-width: 80px;">👤 Nom :</strong>
            <span style="color: #333; font-weight: 500; background: #fff8f0; padding: 6px 12px; border-radius: 6px; border: 1px solid #ffe0b3;">{{ $name }}</span>
        </p>
        <p style="margin-bottom: 12px; font-size: 16px; display: flex; align-items: center; gap: 10px;">
            <strong style="color: #ff6200; font-weight: 600; min-width: 80px;">📧 Email :</strong>
            <span style="color: #333; font-weight: 500; background: #fff8f0; padding: 6px 12px; border-radius: 6px; border: 1px solid #ffe0b3;">{{ $email }}</span>
        </p>
        <p style="margin-bottom: 12px; font-size: 16px; display: flex; align-items: center; gap: 10px;">
            <strong style="color: #ff6200; font-weight: 600; min-width: 80px;">📌 Sujet :</strong>
            <span style="color: #333; font-weight: 500; background: #fff8f0; padding: 6px 12px; border-radius: 6px; border: 1px solid #ffe0b3;">{{ $subject }}</span>
        </p>

        <hr style="margin: 25px 0; border: none; border-top: 1px solid #f0f0f0;">

        <p style="margin-bottom: 10px; font-size: 16px; font-weight: 600; color: #ff6200;">
            💬 Message :
        </p>
        <p style="background: #fff; padding: 20px; border-radius: 8px; font-size: 15px; color: #333; line-height: 1.9; border: 1px solid #f0f0f0; box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);">
            {{ $messageContent }}
        </p>
    </div>
</div>

<style>
    /* Fade-In Animation */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    div {
        animation: fadeIn 0.5s ease-out;
    }

    /* Hover Effect */
    div:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.12);
    }

    /* Icon Hover */
    h2 span:hover {
        transform: scale(1.15);
    }

    /* Responsive Design */
    @media (max-width: 600px) {
        div {
            padding: 20px;
            max-width: 95%;
            margin: 15px auto;
        }

        h2 {
            font-size: 20px;
        }

        h2 span {
            font-size: 24px;
        }

        p {
            font-size: 14px;
        }

        p strong {
            min-width: 70px;
        }

        p span {
            padding: 5px 10px;
        }
    }
</style>
